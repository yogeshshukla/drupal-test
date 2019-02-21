<?php

namespace Drupal\super_hero\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * provides a block call "Example hero Block"
 * @Block(
 *  id = "module_hero_hero",
 *  admin_label = @Translation("Example hero Block")
 * )
 */

class HeroBlock extends BlockBase {
    public function build() {
        $heroes = [
            ["firstname" => "fabc", "lastname"=>"labc"],
            ["firstname" => "fcde", "lastname"=>"lcde"],
            ["firstname" => "abc", "lastname"=>"cde"],
            ["firstname" => "abc", "lastname"=>"cde"],
            ["firstname" => "abc", "lastname"=>"cde"],
        ];
        
        $table = [
            "#type" => "table",
                "header" => [
                    $this->t("First Name"),
                    $this->t("Last Name"),
                ]
            ];
            
        foreach( $heroes as $hero ){
            $table[] = [
                "firstname" => [
                    "#type" => "markup",
                    "#markup" => $hero['firstname']
                ],
                "lastname" => [
                    "#type" => "markup",
                    "#markup" => $hero['lastname']
                ]
                
                ];
        }
        return $table;
    }
}
