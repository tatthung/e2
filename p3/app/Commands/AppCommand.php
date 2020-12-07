<?php

namespace App\Commands;

class AppCommand extends Command
{

    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }

    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'Player' => 'varchar(50)',
            'Computer' => 'varchar(50)',
            'win' => 'varchar(15)', 
            'time' => 'timestamp'
]);

    }

    public function seed()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        # Use a loop to create 10 rounds
        for ($i = 0; $i < 10; $i++) {
            $moves = ['rock', 'scissor', 'paper'];
            $randomMove = array_rand($moves);
            
            # Set up a round
            $round = [
                'Player' => $moves[$randomMove],
                'win' => rand(0, 1),
                'time' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
            ];

            # Insert the round
            $this->app->db()->insert('rounds', $round);
}

    }
}
