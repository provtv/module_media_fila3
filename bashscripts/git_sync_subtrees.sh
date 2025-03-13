#!/bin/bash

CONFIG_FILE="gitmodules.ini"

if [[ ! -f $CONFIG_FILE ]]; then
    echo "Errore: Il file $CONFIG_FILE non esiste!"
    exit 1
fi

branch=$(git symbolic-ref --short HEAD)
current_path=""

while IFS= read -r line; do
    line=$(echo "$line" | tr -d "\r" | sed "s/^[[:space:]]*//;s/[[:space:]]*$//")
    
    if [[ $line =~ path\ =\ (.+)$ ]]; then
        current_path="${BASH_REMATCH[1]}"
    elif [[ $line =~ url\ =\ (.+)$ ]]; then
        current_url="${BASH_REMATCH[1]}"

        echo "----------------------------------------"
        echo "📂 Path: $current_path"
        echo "🔗 URL:  $current_url"
        git filter-branch --subdirectory-filter "$current_path" -- --all
        #git filter-repo --path "$current_path" --invert-paths
        
        if [[ -d "$current_path" ]]; then
            echo "🔄 Tentativo di aggiornamento del subtree esistente..."
            if ! git subtree pull --prefix="$current_path" "$current_url" "$branch" --squash; then
                echo "⚠️  Errore in git subtree pull, tentando con fetch + merge..."
                git fetch "$current_url" "$branch"
                if ! git merge -s subtree -Xsubtree="$current_path" FETCH_HEAD --allow-unrelated-histories; then
                    echo "⚠️  Errore in git merge, tentando con git rm + git subtree add..."
                    git rm -r --cached "$current_path" 
                    git commit -am "Remove $current_path"
                    git subtree add --prefix="$current_path" "$current_url" "$branch" --squash
                fi
            fi
        else
            echo "➕ Aggiunta del subtree..."
            git subtree add --prefix="$current_path" "$current_url" "$branch" --squash
        fi

        echo "⬆️  Pushing delle modifiche locali nel subtree remoto..."
        git subtree push --prefix="$current_path" "$current_url" "$branch"
    fi
done < "$CONFIG_FILE"

echo "✅ Tutti i git subtree sono stati aggiornati e sincronizzati con successo!"
