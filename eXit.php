<?php

# move barrel
# enter tunnel
# read note
# leave
# look
# get on boat


# Colours
function cyan($text) {
    return "\e[0;36m$text\e[0m";
}

function cyan_bold($text) {
    return "\e[1;36m$text\e[0m";
}

function white_bold($text) {
    return "\e[1;37m$text\e[0m";
}

function black($text) {
    return "\e[1;30m$text\e[0m";
}

function slow_print($time, $line, $newline) {
    $line_arr = preg_split("//u", $line, -1, PREG_SPLIT_NO_EMPTY);
    foreach ($line_arr as $char) {
        echo $char;
        usleep($time);
    }
    if ($newline) {
        echo "\n";
    }
}

# Time variables
$time_logo = 1100;
$time_text = 28000;

function startup($time_logo) {
    slow_print($time_logo, '████████████████████████████████████████████████████████████████████████████████', true);
    slow_print($time_logo, '███████████████████████████████'.cyan('▓╫╫╫╫').'█████'.cyan('╫╫╫╫▓').'██████████████████████████████████', true);
    slow_print($time_logo, '███████████████████'.cyan('╬╬╬╬╬╬╬╬').'█████'.cyan('╬╬╬╬╬╬╬╬╬╬╬╬╣').'█████████████'.cyan('╬╬╬╬').'██████████████████', true);
    slow_print($time_logo, '█████████████████'.cyan('╬╬╬▓').'███'.cyan('▓╬╬╬╣').'████'.cyan('▓╬╬╬╬╬╬╬╬╬').'███████'.cyan('▓╬╬╬╬').'██'.cyan('▓▓╬╬╬╬╣▓▓').'██████████████', true);
    slow_print($time_logo, '██████████████'.cyan('╬╬╬╬╬╬╬╬╬╬╬╬╬╬╣').'████'.cyan('▓╬╬╬╬╬╬╬╬╬').'████████'.cyan('╬╬╬╬╬').'█████'.cyan('╬╬╬╬').'███████████████', true);
    slow_print($time_logo, '█████████████'.cyan('╬╬╬╬▓').'███████████████'.cyan('╬╬╬╬╬╬╬╬╬╬╬').'███████'.cyan('▓╬╬╬╬').'█████'.cyan('▓╬╬╬╬╬').'█████████████', true);
    slow_print($time_logo, '███████████'.cyan('▓╬╬╬╬╬').'███'.cyan('╬╬╬╬╬╣').'█████'.cyan('╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬').'██████'.cyan('╬╬╬╬╬╬').'████'.cyan('▓╬╬╬╬╣').'████████████', true);
    slow_print($time_logo, '██████████'.cyan('╬╬╬╬╬╬╬╬╬╬╬╬╬▓▓').'████'.cyan('╬╬╬╬╬╬╬▓').'██'.cyan('╬╬╬╬╬╬╬╬').'█████'.cyan('╬╬╬╬╬╬').'██████'.cyan('▓╬╬╬╬╬').'██████████', true);
    slow_print($time_logo, '█████████████'.cyan('╫╫╫╫╫╫╫').'██████'.cyan('╬╫╫╫╫╫╫╫╫').'█████'.cyan('▓╫╫╫╫╫╫╫╢').'█████'.cyan('╫╫╫╫╫').'████████'.cyan('╫╫╫╫╫╫╫╢').'█████', true);
    slow_print($time_logo, '██████████████████████████'.cyan('╬╬╬╬╬╬╬▓').'███████'.cyan('▓╬╬╬╬╬╬╬').'██████████████████████'.cyan('▓▓▓').'██████', true);
    slow_print($time_logo, '███████████████████████'.cyan('▓╬╬╬╬╬╬╬▓').'██████████'.cyan('╬╬╬╬╬╬╬╬╬╬').'████████████████████████████', true);
    slow_print($time_logo, '████████████████████████████████████████████████████████████████████████████████', true);
}

function shutdown($time_logo) {
    slow_print($time_logo, black('████████████████████████████████████████████████████████████████████████████████'), true);
    slow_print($time_logo, black('███████████████████████████████').'▓╫╫╫╫'.black('█████').'╫╫╫╫▓'.black('██████████████████████████████████'), true);
    slow_print($time_logo, black('███████████████████').'╬╬╬╬╬╬╬╬'.black('█████').'╬╬╬╬╬╬╬╬╬╬╬╬╣'.black('█████████████').'╬╬╬╬'.black('██████████████████'), true);
    slow_print($time_logo, black('█████████████████').'╬╬╬▓'.black('███').'▓╬╬╬╣'.black('████').'▓╬╬╬╬╬╬╬╬╬'.black('███████').'▓╬╬╬╬'.black('██').'▓▓╬╬╬╬╣▓▓'.black('██████████████'), true);
    slow_print($time_logo, black('██████████████').'╬╬╬╬╬╬╬╬╬╬╬╬╬╬╣'.black('████').'▓╬╬╬╬╬╬╬╬╬'.black('████████').'╬╬╬╬╬'.black('█████').'╬╬╬╬'.black('███████████████'), true);
    slow_print($time_logo, black('█████████████').'╬╬╬╬▓'.black('███████████████').'╬╬╬╬╬╬╬╬╬╬╬'.black('███████').'▓╬╬╬╬'.black('█████').'▓╬╬╬╬╬'.black('█████████████'), true);
    slow_print($time_logo, black('███████████').'▓╬╬╬╬╬'.black('███').'╬╬╬╬╬╣'.black('█████').'╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬'.black('██████').'╬╬╬╬╬╬'.black('████').'▓╬╬╬╬╣'.black('████████████'), true);
    slow_print($time_logo, black('██████████').'╬╬╬╬╬╬╬╬╬╬╬╬╬▓▓'.black('████').'╬╬╬╬╬╬╬▓'.black('██').'╬╬╬╬╬╬╬╬'.black('█████').'╬╬╬╬╬╬'.black('██████').'▓╬╬╬╬╬'.black('██████████'), true);
    slow_print($time_logo, black('█████████████').'╫╫╫╫╫╫╫'.black('██████').'╬╫╫╫╫╫╫╫╫'.black('█████').'▓╫╫╫╫╫╫╫╢'.black('█████').'╫╫╫╫╫'.black('████████').'╫╫╫╫╫╫╫╢'.black('█████'), true);
    slow_print($time_logo, black('██████████████████████████').'╬╬╬╬╬╬╬▓'.black('███████').'▓╬╬╬╬╬╬╬'.black('██████████████████████').'▓▓▓'.black('██████'), true);
    slow_print($time_logo, black('███████████████████████').'▓╬╬╬╬╬╬╬▓'.black('██████████').'╬╬╬╬╬╬╬╬╬╬'.black('████████████████████████████'), true);
    slow_print($time_logo, black('████████████████████████████████████████████████████████████████████████████████'), true);
}

function shutdown_space($time_logo) {
    slow_print($time_logo, '                                                                                ', true);
    slow_print($time_logo, '                               ▓╫╫╫╫     ╫╫╫╫▓                                  ', true);
    slow_print($time_logo, '                   ╬╬╬╬╬╬╬╬     ╬╬╬╬╬╬╬╬╬╬╬╬╣             ╬╬╬╬                  ', true);
    slow_print($time_logo, '                 ╬╬╬▓   ▓╬╬╬╣    ▓╬╬╬╬╬╬╬╬╬       ▓╬╬╬╬  ▓▓╬╬╬╬╣▓▓              ', true);
    slow_print($time_logo, '              ╬╬╬╬╬╬╬╬╬╬╬╬╬╬╣    ▓╬╬╬╬╬╬╬╬╬        ╬╬╬╬╬     ╬╬╬╬               ', true);
    slow_print($time_logo, '             ╬╬╬╬▓               ╬╬╬╬╬╬╬╬╬╬╬       ▓╬╬╬╬     ▓╬╬╬╬╬             ', true);
    slow_print($time_logo, '           ▓╬╬╬╬╬   ╬╬╬╬╬╣     ╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬      ╬╬╬╬╬╬    ▓╬╬╬╬╣            ', true);
    slow_print($time_logo, '          ╬╬╬╬╬╬╬╬╬╬╬╬╬▓▓    ╬╬╬╬╬╬╬▓  ╬╬╬╬╬╬╬╬     ╬╬╬╬╬╬      ▓╬╬╬╬╬          ', true);
    slow_print($time_logo, '             ╫╫╫╫╫╫╫      ╬╫╫╫╫╫╫╫╫     ▓╫╫╫╫╫╫╫╢     ╫╫╫╫╫        ╫╫╫╫╫╫╫╢     ', true);
    slow_print($time_logo, '                          ╬╬╬╬╬╬╬▓       ▓╬╬╬╬╬╬╬                      ▓▓▓      ', true);
    slow_print($time_logo, '                       ▓╬╬╬╬╬╬╬▓          ╬╬╬╬╬╬╬╬╬╬                            ', true);
    slow_print($time_logo, '                                                                                ', true);
}




# start
#shutdown($time_logo);
startup($time_logo);
readline(slow_print($time_text, 'Press the enter button to continue...', false));




function trapped($time_text) {
    slow_print($time_text, 'You\'re trapped in a dungeon with your friend.'."\n".'You see a barrel. What do you do?', true);
}
trapped($time_text);

# tunnel
function dungeon($time_text) {
    echo cyan_bold('> ');
    if (readline('') == 'move barrel') {
        slow_print($time_text, 'The barrel rolls aside and you find a secret tunnel.'."\n".'What do you do?', true);
    } else {
        slow_print($time_text, 'You can\'t do that here.', true);
    }
}
dungeon($time_text);

# note
function bye($time_text) {
    echo cyan_bold('> ');
    if (readline('') == 'enter tunnel') {
        slow_print($time_text, 'You start to escape but your friend is too weak to go with you. They hand you a note.'."\n".'What do you do?', true);
    } else {
        slow_print($time_text, 'You can\'t type that.', true);
    }
}
bye($time_text);

# leave
function note($time_text) {
    echo cyan_bold('> ');
    if (readline('') == 'read note') {
        slow_print($time_text, 'It is too dark to read the note.'."\n".'What do you do?', true);
    } else {
        slow_print($time_text, 'You can\'t do that here.', true);
    }
}
note($time_text);

# beach
function leave($time_text) {
    echo cyan_bold('> ');
    if (readline('') == 'leave') {
        slow_print($time_text, 'You crawl through the tunnel and the tunnel leads to a beach.'."\n".'What do you do?', true);
    } else {
        slow_print($time_text, 'You can\'t do that here.', true);
    }
}
leave($time_text);

# boat
function look($time_text) {
    echo cyan_bold('> ');
    if (readline('') == 'look') {
        slow_print($time_text, 'In the water you see a boat.'."\n".'What do you do?', true);
    } else {
        slow_print($time_text, 'You can\'t do that here.', true);
    }
}
look($time_text);

# eXit
function get($time_text) {
    echo cyan_bold('> ');
    if (readline('') == 'get on boat') {
        slow_print($time_text, 'Congratulations, you\'re heading to a new world!', true);
    }
}
get($time_text);
shutdown_space($time_logo);


?>