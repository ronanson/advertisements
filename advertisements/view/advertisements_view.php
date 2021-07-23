<?php
require_once 'model/advertisements_model.php';
 
class AdvertisementsView extends Advertisements
{
    public function showAdvertisements()
    {
        $stmt = $this->getAdvertisements();
        $html = '';
        $html ='<table class="content-table"/>';
        $html .='<thead>';
        $html .='<tr>';
        $html .='<th>Advertisement id</th>';
        $html .='<th>Advertiser</th>';
        $html .='<th>Title</th>';
        $html .='</tr>';
        $html .='</thead>';
        $html .='<tbody>';
        while ($results = $stmt->fetch())
        {
            $html .= '<tr>';
            $html .= ('<td>'.$results['id'].'</td>');
            $html .= ('<td>'. $results['name'].'</td>');
            $html .= ('<td>'. $results['title'].'</td>');
            $html .= '</tr>';
        }
        $html .='</tbody>';
        $html .='<table>';

        return $html;
    }
}