<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class AlertMessage extends Cell
{
    public function show(array $params=[]) : string {
        if (session('success')) {
            return "<div class='alert alert-success' role='alert'>".session('success')."</div>";    
        }
        
        if (session('error')) {
            return "<div class='alert alert-danger' role='alert'>".session('error')."</div>";    
        }

        return "";
    }
}
