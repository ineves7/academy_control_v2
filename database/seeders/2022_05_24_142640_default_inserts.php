<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use App\Models\MatrialStatus;

class DefaultInserts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $week_days = [
            [   
                'week_day' => 'Novidades', 
                'active' => 1
            ],
            [   
                'title' => 'Atividades da Conta', 
                'active' => 1
            ],
            [   
                'title' => 'Acessos de novos navegadores', 
                'active' => 1
            ]
        ];

        foreach ($notification_types as $notification_type) {
            NotificationType::firstOrCreate($notification_type);
        }
    }

    if (!App::environment('production')) {
        Model::withoutEvents(function () {
            User::create([
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('admin')
                ]
            );
        });
    }

    if(App::environment('production')) {
        Model::withoutEvents(function () {
            User::create([
                    'name' => 'Admin',
                    'email' => 'code.dev@arraial.rj.gov.br',
                    'password' => Hash::make('@135devcode')
                ]
            );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
