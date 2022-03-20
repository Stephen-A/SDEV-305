<?php
function getHowWeMet() {
    return array('0'=>'Choose...', 'Tech Meetup'=>'Tech Meetup', 'Job Fair'=>'Job Fair',
                 'Other'=>'Other', "We haven't met yet"=>"We haven't met yet");
}

function validName($name)
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        echo "<p>Only letters and white space allowed for first and last name</p>";
    } else{
    return !empty($name);
    }
}

function validEmail($email)
{
    return !empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validLinkedin($linkedin)
{
    return !empty($linkedin) && !preg_match("/(https?)?:?(\/\/)?(([w]{3}||\w\w)\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/", $linkedin);
}

function validHowWeMet($how_we_met)
{
    return array_key_exists($how_we_met, getHowWeMet()) && $how_we_met != '0';
}


