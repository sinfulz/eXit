<?php

# move barrel
# enter tunnel
# read note
# leave
# look
# get on boat

function cyan($text) {
    return "\e[0;36m$text\e[0m";
}

function cyan_bold($text) {
    return "\e[1;36m$text\e[0m";
}

function white_bold($text) {
    return "\e[1;37m$text\e[0m";
}

function slow_print($line) {
    $line_arr = preg_split("//u", $line, -1, PREG_SPLIT_NO_EMPTY);
    foreach ($line_arr as $char) {
        echo $char;
        usleep(1100);
    }
    echo "\n";
}


function display_logo() {
    slow_print('████████████████████████████████████████████████████████████████████████████████')."\n";
    slow_print('███████████████████████████████'.cyan('▓╫╫╫╫').'█████'.cyan('╫╫╫╫▓').'██████████████████████████████████')."\n";
    slow_print('███████████████████'.cyan('╬╬╬╬╬╬╬╬').'█████'.cyan('╬╬╬╬╬╬╬╬╬╬╬╬╣').'█████████████'.cyan('╬╬╬╬').'██████████████████')."\n";
    slow_print('█████████████████'.cyan('╬╬╬▓').'███'.cyan('▓╬╬╬╣').'████'.cyan('▓╬╬╬╬╬╬╬╬╬').'███████'.cyan('▓╬╬╬╬').'██'.cyan('▓▓╬╬╬╬╣▓▓').'██████████████')."\n";
    slow_print('██████████████'.cyan('╬╬╬╬╬╬╬╬╬╬╬╬╬╬╣').'████'.cyan('▓╬╬╬╬╬╬╬╬╬').'████████'.cyan('╬╬╬╬╬').'█████'.cyan('╬╬╬╬').'███████████████')."\n";
    slow_print('█████████████'.cyan('╬╬╬╬▓').'███████████████'.cyan('╬╬╬╬╬╬╬╬╬╬╬').'███████'.cyan('▓╬╬╬╬').'█████'.cyan('▓╬╬╬╬╬').'█████████████')."\n";
    slow_print('███████████'.cyan('▓╬╬╬╬╬').'███'.cyan('╬╬╬╬╬╣').'█████'.cyan('╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬').'██████'.cyan('╬╬╬╬╬╬').'████'.cyan('▓╬╬╬╬╣').'████████████')."\n";
    slow_print('██████████'.cyan('╬╬╬╬╬╬╬╬╬╬╬╬╬▓▓').'████'.cyan('╬╬╬╬╬╬╬▓').'██'.cyan('╬╬╬╬╬╬╬╬').'█████'.cyan('╬╬╬╬╬╬').'██████'.cyan('▓╬╬╬╬╬').'██████████')."\n";
    slow_print('█████████████'.cyan('╫╫╫╫╫╫╫').'██████'.cyan('╬╫╫╫╫╫╫╫╫').'█████'.cyan('▓╫╫╫╫╫╫╫╢').'█████'.cyan('╫╫╫╫╫').'████████'.cyan('╫╫╫╫╫╫╫╢').'█████')."\n";
    slow_print('██████████████████████████'.cyan('╬╬╬╬╬╬╬▓').'███████'.cyan('▓╬╬╬╬╬╬╬').'██████████████████████'.cyan('▓▓▓').'██████')."\n";
    slow_print('███████████████████████'.cyan('▓╬╬╬╬╬╬╬▓').'██████████'.cyan('╬╬╬╬╬╬╬╬╬╬').'████████████████████████████')."\n";
    slow_print('████████████████████████████████████████████████████████████████████████████████')."\n";
}




# start
display_logo();
readline('Press the enter button to continue...');




function trapped() {
    echo 'You\'re trapped in a dungeon with your friend.'."\n".'You see a barrel. What do you do?'."\n";
}
trapped();

# tunnel
function dungeon() {
    echo cyan_bold('> ');
    if (readline('') == 'move barrel') {
        echo 'The barrel rolls aside and you find a secret tunnel.'."\n".'What do you do?'."\n";
    } else {
        echo 'You can\'t do that here.'."\n";
    }
}
dungeon();

# note
function bye() {
    echo cyan_bold('> ');
    if (readline('') == 'enter tunnel') {
        echo 'You start to escape but your friend is too weak to go with you. They hand you a note.'."\n".'What do you do?'."\n";
    } else {
        echo 'You can\'t type that.'."\n";
    }
}
bye();

# leave
function note() {
    echo cyan_bold('> ');
    if (readline('') == 'read note') {
        echo 'It is too dark to read the note.'."\n".'What do you do?'."\n";
    } else {
        echo 'You can\'t do that here.'."\n";
    }
}
note();

# beach
function leave() {
    echo cyan_bold('> ');
    if (readline('') == 'leave') {
        echo 'You crawl through the tunnel and the tunnel leads to a beach.'."\n".'What do you do?'."\n";
    } else {
        echo 'You can\'t do that here.'."\n";
    }
}
leave();

# boat
function look() {
    echo cyan_bold('> ');
    if (readline('') == 'look') {
        echo 'In the water you see a boat.'."\n".'What do you do?'."\n";
    } else {
        echo 'You can\'t do that here.'."\n";
    }
}
look();

# eXit
function get() {
    echo cyan_bold('> ');
    if (readline('') == 'get on boat') {
        echo 'Congratulations, you\'re heading to a new world!'."\n";
    }
}
get();


?>