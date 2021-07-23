<?php
require('model/users_model.php');
 
class UsersView extends Users
{
    public function showUsers()
    {
        $stmt = $this->getUsers();
        $html = '';
        $html ='<table class="content-table"/>';
        $html .='<thead>';
        $html .='<tr>';
        $html .='<th>User ID</th>';
        $html .='<th>Full Name</th>';
        $html .='</tr>';
        $html .='</thead>';
        $html .='<tbody>';
        while ($results = $stmt->fetch())
        {
            $html .= '<tr>';
            $html .= ('<td>'.$results['id'].'</td>');
            $html .= ('<td>'. $results['name'].'</td>');
            $html .= '</tr>';
        }
        $html .='</tbody>';
        $html .='<table>';
        
        return $html;
    }
}