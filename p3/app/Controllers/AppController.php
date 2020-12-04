<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $results = $this->app->old('results');
        return $this->app->view('index', [
            'results' => $results
        ]);
    }

    public function history()
    {
        $rounds = $this->app->db()->all('rounds');
        
        return $this->app->view('history', [
            'rounds' => $rounds 
        ]);
    }

    public function round()
    {
        $id = $this->app->param('id');
        $computer = $this->app->old('Computer');

        $round = $this->app->db()->findById('rounds', $id);

        return $this->app->view('round', [
            'round' => $round,
            'Computer' => $computer
        ]);
    }

    public function play()
    {
        $moves = ['rock', 'scissors', 'paper'];  
        $computer = $moves[rand(0, 2)];
        $move = $this->app->input('move');  

        if ($computer == $move) { # if there is a tie
            $win = 'Tie'; 
        } elseif ($computer == $moves[0] and $move == $moves[1]) {
            $win = 'Computer';
        } elseif ($computer == $moves[1] and $move == $moves[2]) {
            $win = 'Computer';
        } elseif ($computer == $moves[2] and $move == $moves[0]) {
            $win = 'Computer';
        } else {
            $win = 'move';
        }
        
        $data = [
            'move' => $move,
            'win' => $win,
            'time' => date('Y-m-d H:i:s'),
        ];
        
        $this->app->db()->insert('rounds', $data);

        #Redirect user back to the homepage
        $this->app->redirect('/', [
            'results' => [
                'move' => $move,
                'Computer' => $computer,
                'win' => $win,
                'lose' => $win
            ]
        ]);
    }

}