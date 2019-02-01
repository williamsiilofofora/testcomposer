<?php

use Symfony\Component\Yaml\Yaml;


class KercodeWar
{
    public static function weekday($number, $lang = "en")
    {
        if ($lang === "fr"){
            $content = Yaml::parse(file_get_contents("fr.yml"));
        }else{
            $content = Yaml::parse(file_get_contents("en.yml"));
        }
        if ($number >= 1 && $number <= 7) {
            return $content['weekdays']['days'][$number - 1];
          } else {
            return $content['weekdays']['error'];
          }
        }

       /* {
            eval(\Psy\sh());
        }*/
       /* if ($lang === "fr") {
            if ($number === 1) {
                return 'Dimanche';
            }
            if ($number === 2) {
                return 'Lundi';
            }
            if ($number === 3) {
                return 'Mardi';
            }
            if ($number === 4) {
                return 'Mercredi';
            }
            if ($number === 5) {
                return 'Jeudi';
            }
            if ($number === 6) {
                return 'Vendredi';
            }
            if ($number === 7) {
                return 'Samedi';
            } else {
                return ' Erreur, entrez un numeros entre 1 et 7 s\'il vous plais.';
                KercodeWar::weekday('plop');
            }
        } else {
            if ($number === 1) {
                return 'Sunday';
            }
            if ($number === 2) {
                return 'Monday';
            }
            if ($number === 3) {
                return 'Tuesday';
            }
            if ($number === 4) {
                return 'Wednesday';
            }
            if ($number === 5) {
                return 'Thursday';
            }
            if ($number === 6) {
                return 'Friday';
            }
            if ($number === 7) {
                return 'Saturday';
            } else {
                return 'Wrong, please enter a number beetwen 1 and 7';
                KercodeWar::weekday('plop');
            }
        }*/






    public static function isweekend($number)
    {
        if ($number === 1 || $number === 7) {
            return true;
        } elseif ($number === 2 || $number === 3 || $number === 4 || $number === 5 || $number === 6) {

            return false;
        } else {
            return 'Wrong, please enter a number beetwen 1 and 7';
            KercodeWar::isweeken('plop');
        }
    }

}