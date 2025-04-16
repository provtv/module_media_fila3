#!/bin/bash

LOG_FILE="subtree_sync.log"
BRANCH=$(git symbolic-ref --short HEAD 2>/dev/null || echo "main")
LOG_FILE="subtree_sync.log"

# Funzione per loggare messaggi
log() {
    local message="$1"
    echo "📆 $(date '+%Y-%m-%d %H:%M:%S') - $message" | tee -a "$LOG_FILE"
}

# Funzione per gestire gli errori
handle_error() {
    local error_message="$1"
    log "❌ Errore: $error_message"
    exit 1
}

# Simple error handling function
die() {
    echo "$1" >&2
    exit 1
}



# Funzione per riscrivere la URL secondo le regole specificate
rewrite_url() {
    local original_url="$1"
    local org="$2"

    # Estrai solo il nome del repository (ultimo componente dopo lo slash)
    repo_name=$(basename "$original_url")

    if [[ "$org" == *"/"* ]]; then
        # ORG contiene uno slash → usa direttamente come prefisso
        echo "${org}/${repo_name}"
    else
        # ORG è un'organizzazione GitHub → usa formato GitHub SSH
        echo "git@github.com:${org}/${repo_name}"
    fi
}