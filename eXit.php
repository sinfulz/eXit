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
$time_text = 26000;
$time_text = 1000; # debug speed

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

function logo_space($time_logo) {
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


function congrats($time_text) {
    echo "\n";
    slow_print($time_text, 'Congratulations. You have passed the test.', true);
    $key = 'xxxet-xi--ee--tteitxxeeetiteitxe-ixxii--ee--ieeetetxitextxexx-ii-ti-xi--t-i-e--t-iiit--etxeiex-xixit-xt-iett-xxex-xtetieix--ti-e-xxxxeixt--xxeieixeitee-eiee-xt-x-i-te-txxititxeexxte-titixi-tei-xieexx-xitittx-etitx--ie--ii-exit-iixt-ei---xxitx-itiexeitxeetxtetxiitxi-e--i-x-ixtexex---e-ttttxiietitiieeixixtiexx--exexetxxeei--xi-ixitte-tei-ttiexee-xtiitixxe-tti-e-xiiieix-ex-teeixex-xieix-eiie-exx--etex-etiittett--teii-tie-extixetiexi-xit-e-tei-i-tte-tetxtiix-ieix-ttexxieiiiet--xtietieiietxx-xexeit-xt-ttexii-tei-itxi-t-t-ixxix-ei-i-txixitetei-i-xeeexixte-xxitxittti-tte--te-xetiittxxiexeteixxx';
    slow_print($time_text, 'Here is your key:', true);
    echo "\n";
    slow_print(2500, str_shuffle($key), true);
    echo "\n";
    slow_print($time_text, 'Use it wisely.', true);
    echo "\n";
    exit;
}

function show_inventory($time_text, $inventory) {
    echo "\n";
    slow_print($time_text, "        INVENTORY", true);
    foreach ($inventory as $item => $has) {
        if ($has == 1) {
            slow_print($time_text, "| $item", true);
        }
    }
}

function word_rand($word) {
    $output = '';
    $capital = false;
    $cap_combo = '';
    $length = strlen($word);
    $random = mt_rand(0, $length - 1);
    for ($i = 0; $i < $length; $i++) {
        if ($capital) {
            $output .= substr($word, $i, 1);
        } else {
            if ($random == $i) {
                $output .= strtoupper(substr($word, $i, 1));
                $cap_combo .= strtoupper(substr($word, $i, 1));
            } else {
                $output .= substr($word, $i, 1);
            }
        }
    }
    return ['combo' => $cap_combo, 'full' => $output];
}

function full_rand($sentence, $end) {
    $sentence = strtolower($sentence);
    $output = '';
    $combo = '';
    $words = explode(' ', $sentence);
    foreach ($words as $word) {
        $rand = word_rand($word);
        $combo .= $rand['combo'];
        $output .= $rand['full'];
        if (end($words) != $word) {
            $output .= ' ';
        } else {
            $output .= $end;
        }
    }
    return ['combo' => $combo, 'full' => $output];
}


# start
logo_space($time_logo);
slow_print($time_text, 'Press the enter button to continue..', false);

$startup_input = readline('.');

# hidden demo
if ($startup_input == 'eXit') {
    $inventory = [
        'Ruler' => 'false'
    ];
    # desk
    slow_print($time_text, "\nYou wake in a cold room. The walls are bare and the carpet is worn.\nThe only light is provided by a dim bulb, which hangs loosely from the ceiling.\nEven the air feels unwelcoming and hostile. The bed you lie on is uncomfortable.\nA rickety wooden desk leans against the wall.", true);
    $wake_input = readline('> ');
    $wake_switch = false;
    while (!$wake_switch) {
        if (in_array($wake_input, ['look at desk', 'look desk', 'inspect desk', 'go to desk', 'go desk'])) {
            $wake_switch = true;
        } elseif (in_array($wake_input, ['look at bed', 'inspect bed', 'look bed'])) {
            slow_print($time_text, "\nThe sheets are dusty and coarse. It is obvious that no part of the bed has been cleaned for months.", true);
            $wake_input = readline('> ');
        } else {
            slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
            $wake_input = readline('> ');
        }
    }
    slow_print($time_text, "\nYou approach the desk. The paint is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper and a wooden ruler lay on the desk.\nThe drawer of the desk is slightly open.", true);
    $desk_input = readline('> ');
    $desk_switch = false;
    $drawer_tried_switch = false;
    $drawer_open_switch = false;
    $note =  full_rand('exit while you still can', '.');
    while (!$desk_switch) {
        if (in_array($desk_input, ['look at drawer', 'inspect drawer', 'look drawer', 'open drawer'])) {
            if ($drawer_open_switch == false) {
                if ($drawer_tried_switch == false && $inventory['Ruler'] != 1) {
                    slow_print($time_text, "\nThe drawer lies ajar, but something seems to be jamming it from opening fully.\nYou attempt to clear the blockage, but it is just out of reach.", true);
                    $drawer_tried_switch = true;
                } elseif ($drawer_tried_switch == true && $inventory['Ruler'] != 1) {
                    slow_print($time_text, "\nThe drawer still won't budge. Perhaps there's some sort of instrument that could clear the blockage?", true);
                } elseif ($drawer_tried_switch == false && $inventory['Ruler'] == 1) {
                    slow_print($time_text, "\nThe drawer lies ajar, but something seems to be jamming it from opening fully.\nAfter a few tries, you use the ruler to pry the obstruction free.\nThe drawer is empty, but you discover that the blockage was caused by a small black box.\nIt has a lock on the side that requires 5 letters.\n(Say 'lock [combination]' to unlock.)", true);
                    $drawer_tried_switch = true;
                    $drawer_open_switch = true;
                } elseif ($drawer_tried_switch == true && $inventory['Ruler'] == 1) {
                    slow_print($time_text, "\nAfter a few tries, you use the ruler to pry the obstruction free.\nThe drawer is empty, but you discover that the blockage was caused by a small black box.\nIt has a lock on the side that requires 5 letters.\n(Say 'lock [combination]' to unlock.)", true);
                    $drawer_open_switch = true;
                }
                $desk_input = readline('> ');
            } else {
                slow_print($time_text, "\nThe lock in the drawer requires 5 letters.\n(Say 'lock [combination]' to unlock.)", true);
                $desk_input = readline('> ');
            }
        } elseif (substr_count($desk_input, 'lock') == 1) {
            $combo = substr($desk_input, 5, 5);
            if (strtolower($combo) == strtolower($note['combo'])) {
                slow_print($time_text, "\nThe lock clicks open. Peering inside the box, you see a small brass key.\nYou use it to open the door to your room, and eXit.", true);
                $desk_switch = true;
                congrats($time_text);
            } else {
                slow_print($time_text, "\nIncorrect combination.\n(Say 'lock [combination]' to unlock.)", true);
                $desk_input = readline('> ');
            }

        } elseif (in_array($desk_input, ['look paper', 'look at paper', 'inspect paper', 'look ruler', 'look at ruler', 'inspect ruler'])) {
            if ($inventory['Ruler'] == 1) {
                slow_print($time_text, "\nThe paper reads:\n".$note['full'], true);
            } else {
                slow_print($time_text, "\nThe ruler and the paper on the desk are less dusty than the rest of the room.\nYou pick up the ruler.", true);
                $inventory['Ruler'] = true;
                show_inventory($time_text, $inventory);
                slow_print($time_text, "\nYou look at the paper more closely. It reads:\n".$note['full'], true);
            }
            $desk_input = readline('> ');
        } elseif (in_array($desk_input, ['look', 'look desk', 'inspect desk', 'look at desk'])) {
            if ($drawer_open_switch) {
                slow_print($time_text, "\nThe paint of the desk is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper lies on the desk.\nThe drawer is open; a locked box sits inside.", true);
            } else {
                if ($inventory['Ruler'] == 1) {
                    slow_print($time_text, "\nThe paint of the desk is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper lies on the desk.\nOne of the drawers is slightly open.", true);
                } else {
                    slow_print($time_text, "\nThe paint of the desk is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper and a wooden ruler lay on the desk.\nOne of the drawers is slightly open.", true);
                }
            }
            $desk_input = readline('> ');
        } else {
            slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
            $desk_input = readline('> ');
        }
    }
}
echo "\n";

slow_print($time_text, "\nYou're trapped in a dungeon with your friend. You see a barrel.", true);
$barrel_input = readline('> ');
$barrel_switch = false;
while (!$barrel_switch) {
    if (in_array($barrel_input, ['look at barrel', 'look barrel', 'inspect barrel', 'move barrel'])) {
        $barrel_switch = true;
    } elseif (in_array($barrel_input, ['look around'])) {
        slow_print($time_text, "\nThe walls of the dungeon are damp, their stench is potent.\nThere is no route back.", true);
        $barrel_input = readline('> ');
    } else {
        slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
        $barrel_input = readline('> ');
    }
}

slow_print($time_text, "\nThe barrel rolls aside and you find a secret tunnel.", true);
$tunnel_input = readline('> ');
$tunnel_switch = false;
while (!$tunnel_switch) {
    if (in_array($tunnel_input, ['go to tunnel', 'go tunnel', 'enter tunnel'])) {
        $tunnel_switch = true;
    } elseif (in_array($tunnel_input, ['look', 'look around'])) {
        slow_print($time_text, "\nThe walls of the dungeon are damp, their stench is potent.\nThe ony way forward is through the tunnel.\nThe light on the other side of the tunnel is blinding.", true);
        $tunnel_input = readline('> ');
} else {
        slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
        $tunnel_input = readline('> ');
    }
}

slow_print($time_text, "\nYou start to escape but your friend is too weak to go with you.\nThey hand you a note.", true);
$hand_input = readline('> ');
$hand_switch = false;
while (!$hand_switch) {
    if (in_array($hand_input, ['read note', 'read', 'look note', 'look at note'])) {
        slow_print($time_text, "\nIt is too dark to read the note.", true);
        $hand_input = readline('> ');
    } elseif (in_array($hand_input, ['leave', 'enter tunnel', 'go tunnel', 'go to tunnel'])) {
        $hand_switch = true;
    } elseif (in_array($hand_input, ['look', 'look around'])) {
        slow_print($time_text, "\nThe walls of the dungeon are damp, their stench is potent.\nThe ony way forward is through the tunnel.\nThe light on the other side of the tunnel is blinding.", true);
        $hand_input = readline('> ');
} else {
        slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
        $hand_input = readline('> ');
    }
}

slow_print($time_text, "\nYou crawl through the tunnel and the tunnel leads to a beach.", true);
$beach_input = readline('> ');
$beach_switch = false;
while (!$beach_switch) {
    if (in_array($beach_input, ['read note', 'read', 'look note', 'look at note'])) {
        slow_print($time_text, "\nThe note reads:\ndon't leave me here.", true);
        $beach_input = readline('> ');
    } elseif (in_array($beach_input, ['look', 'look around'])) {
        $beach_switch = true;
    } else {
        slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
        $beach_input = readline('> ');
    }
}


slow_print($time_text, "\nIn the water you see a boat.", true);
$boat_input = readline('> ');
$boat_switch = false;
while (!$boat_switch) {
    if (in_array($boat_input, ['look', 'look around'])) {
        slow_print($time_text, "\nThe boat bobs slowly in the water.", true);
        $boat_input = readline('> ');
    } elseif (in_array($boat_input, ['get on boat', 'look at boat'])) {
        slow_print($time_text, "Congratulations, you're heading to a new world!", true);
        $boat_switch = true;
    } else {
        slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
        $boat_input = readline('> ');
    }
}
#logo_space($time_logo);


?>