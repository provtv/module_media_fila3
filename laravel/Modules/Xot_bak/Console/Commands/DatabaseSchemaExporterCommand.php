<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======
declare(strict_types=1);

>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DatabaseSchemaExporterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:schema-exporter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export the database schema';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Ottieni la lista di tutte le tabelle nel database.
        $tables = $this->getTables('mysql');

        // Ora puoi utilizzare $tables come preferisci
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
        $this->info('Tabelle trovate: ' . implode(', ', $tables));
=======
        $this->info('Tabelle trovate: '.implode(', ', $tables));
>>>>>>> origin/dev
<<<<<<< HEAD
=======
        $this->info('Tabelle trovate: ' . implode(', ', $tables));
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf

        return 0;
    }

    /**
     * Ottieni la lista di tutte le tabelle nel database.
     */
    private function getTables(string $connection): array
    {
        // Utilizziamo un approccio alternativo che funziona con qualunque connessione
        $tables = DB::connection($connection)
            ->select('SHOW TABLES');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
        
        $databaseName = config("database.connections.{$connection}.database");
        
        // Il risultato contiene un array di oggetti con una proprietà del tipo Tables_in_{database}
        $tableKey = "Tables_in_{$databaseName}";
        
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
=======

        $databaseName = config("database.connections.{$connection}.database");

        // Il risultato contiene un array di oggetti con una proprietà del tipo Tables_in_{database}
        $tableKey = "Tables_in_{$databaseName}";

>>>>>>> origin/dev
<<<<<<< HEAD
=======
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
        return array_map(function ($table) use ($tableKey) {
            return $table->$tableKey;
        }, $tables);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
} 
=======
}
>>>>>>> origin/dev
<<<<<<< HEAD
=======
} 
>>>>>>> origin/dev
=======
>>>>>>> e06b7b401b19a629db99ac2a1abdc82075a443cf
