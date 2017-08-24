<?php
 
namespace SilberringeCeresTheme\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class SilberringeCeresThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('SilberringeCeresTheme::content.SilberringeCeresTheme');
    }
}