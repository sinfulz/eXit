<?php

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
    $line_arr = preg_split("//u", $line, -1, PREG_SPLIT_NO_EMPTY);  # split the line into an array to be iterated over
    foreach ($line_arr as $char) {      # iterate over each character in the line
        echo $char;                     # echo the character
        usleep($time);                  # sleep for the given time
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
    slow_print(2500, str_shuffle($key), true);      # randomise the key so it is different (nearly) every time
    echo "\n";
    slow_print($time_text, 'Use it wisely.', true);
    echo "\n";
    exit;
}

function show_inventory($time_text, $inventory) {       # display the current inventory
    echo "\n";
    slow_print($time_text, "        INVENTORY", true);
    foreach ($inventory as $item => $has) {             # for each item in the inventory
        if ($has == 1) {                                # if has the item
            slow_print($time_text, "| $item", true);
        }
    }
}

function word_rand($word) {         # capitalise a word
    $output = '';
    $cap_combo = '';
    $length = strlen($word);
    $random = mt_rand(0, $length - 1);  # choose a random letter to be capital
    for ($i = 0; $i < $length; $i++) {  # for the length of the word
        if ($random == $i) {            # if chosen to be capital
            $output .= strtoupper(substr($word, $i, 1));    # add capital to full output
            $cap_combo .= strtoupper(substr($word, $i, 1)); # add capital to combo
        } else {
            $output .= substr($word, $i, 1);                # add lowercase to full output
        }
    }
    return ['combo' => $cap_combo, 'full' => $output];             # return the letter for the combo and full output
}

function full_rand($sentence, $end) {   # capitalise a sentence
    $output = '';
    $combo = '';
    $sentence = strtolower($sentence);
    $words = explode(' ', $sentence);   # make an array of the words in the sentence
    foreach ($words as $word) {         # for each word in the sentence
        $rand = word_rand($word);       # randomise it using the above function
        $combo .= $rand['combo'];       # assign the combo to a variable
        $output .= $rand['full'];       # assign the full word to a variable
        if (end($words) == $word) {       # if this is the last word in the sentence
            $output .= $end;            # add the 'end' to the sentence
        } else {                        # if this isn't the last word in the sentence
            $output .= ' ';             # add a space to the end
        }
    }
    return ['combo' => $combo, 'full' => $output];             # return the combo and full output
}


# start
logo_space($time_logo);
slow_print($time_text, 'Press the enter button to continue..', false);

$startup_input = readline('. ');

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
} elseif ($startup_input == 'og') {
    slow_print($time_text, "\nYou're trapped in a dungeon with your friend. You see a barrel.\nWhat do you do?", true);
    $barrel_input = readline('> ');
    $barrel_switch = false;
    while (!$barrel_switch) {
        if (in_array($barrel_input, ['move barrel'])) {
            $barrel_switch = true;
        } else {
            slow_print($time_text, "\nYou can't do that here.", true);
            $barrel_input = readline('> ');
        }
    }

    slow_print($time_text, "\nThe barrel rolls aside and you find a secret tunnel.", true);
    $tunnel_input = readline('> ');
    $tunnel_switch = false;
    while (!$tunnel_switch) {
        if (in_array($tunnel_input, ['enter tunnel'])) {
            $tunnel_switch = true;
        } else {
            slow_print($time_text, "\nYou can't do that here.", true);
            $tunnel_input = readline('> ');
        }
    }

    slow_print($time_text, "\nYou start to escape but your friend is too weak to go with you.\nThey hand you a note.", true);
    $hand_input = readline('> ');
    $hand_switch = false;
    while (!$hand_switch) {
        if (in_array($hand_input, ['read note'])) {
            slow_print($time_text, "\nIt is too dark to read the note.", true);
            $hand_input = readline('> ');
        } elseif (in_array($hand_input, ['light a match'])) {
            slow_print($time_text, "\nThe note says, \"Don't leave me here.\"\nDo you leave your friend or stay?", true);
            $hand_input = readline('> ');
        } elseif (in_array($hand_input, ['stay'])) {
            logo_space($time_logo);
            exit;
        } elseif (in_array($hand_input, ['leave'])) {
            $hand_switch = true;
        } else {
            slow_print($time_text, "\nYou can't do that here.", true);
            $hand_input = readline('> ');
        }
    }

    slow_print($time_text, "\nYou crawl through the tunnel and the tunnel leads to a beach.", true);
    $beach_input = readline('> ');
    $beach_switch = false;
    while (!$beach_switch) {
        if (in_array($beach_input, ['look'])) {
            $beach_switch = true;
        } else {
            slow_print($time_text, "\nYou can't do that here.", true);
            $beach_input = readline('> ');
        }
    }

    slow_print($time_text, "\nIn the water you see a boat.", true);
    $boat_input = readline('> ');
    $boat_switch = false;
    while (!$boat_switch) {
        if (in_array($boat_input, ['get on boat'])) {
            slow_print($time_text, "Congratulations, you're heading to a new world!", true);
            $boat_switch = true;
        } else {
            slow_print($time_text, "\nYou can't do that here.", true);
            $boat_input = readline('> ');
        }
    }
} else {
    # more detailed story
    slow_print($time_text, "\nYou're trapped in a dungeon with your friend.\nThey are injured, and sit slumped against a wall.\nThere is a barrel in front of you.", true);
    $barrel_input = readline('> ');
    $barrel_switch = false;
    $sit_switch = false;
    $left_switch = false;
    $note_switch = false;
    while (!$barrel_switch) {
        if (in_array($barrel_input, ['look at barrel', 'look barrel', 'inspect barrel', 'move barrel'])) {
            $barrel_switch = true;
        } elseif (in_array($barrel_input, ['sit', 'sit down', 'sit with friend', 'sit down with friend', 'sit with my friend', 'sit down with my friend'])) {
            slow_print($time_text, "\nAs you sit down next to your friend, they hand you a note.", true);
            $sit_switch = true;
            $barrel_input = readline('> ');
        } elseif (in_array($barrel_input, ['read note', 'read', 'look note', 'look at note']) && $sit_switch) {
            slow_print($time_text, "\nIt is too dark to read the note.\nYou remember the box of matches in your pocket, empty but for one.", true);
            $barrel_input = readline('> ');
        } elseif (in_array($barrel_input, ['light a match', 'light match']) && $sit_switch) {
            slow_print($time_text, "\nThe match flickers to life, and illuminates the note.\nThe note says, \"Don't leave me here.\"\nDo you leave your friend or stay?", true);
            $note_switch = true;
            $barrel_input = readline('> ');
        } elseif (in_array($barrel_input, ['stay']) && $note_switch && $sit_switch) {
            slow_print($time_text, "\nYou stay seated next to your friend.\nAs the match's flame wavers, your friend turns to you and smiles.", true);
            logo_space($time_logo);
            exit;
        } elseif (in_array($barrel_input, ['leave']) && $sit_switch) {
            slow_print($time_text, "\nYou stand up and look for a way out.\nThe barrel looks light enough to move.", true);
            $left_switch = true;
            $barrel_input = readline('> ');
        } elseif (in_array($barrel_input, ['look around', 'look'])) {
            slow_print($time_text, "\nThe walls of the dungeon are damp. Your friend is still sitting.", true);
            $barrel_input = readline('> ');
        } else {
            slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
            $barrel_input = readline('> ');
        }
    }

    slow_print($time_text, "\nFlecks of paint fall from the barrel when you touch it.\nIts metal frame, rusted and worn, creaks as you roll it aside.\nIn its place lies the entrance to a secret tunnel.", true);
    $tunnel_input = readline('> ');
    $tunnel_switch = false;
    while (!$tunnel_switch) {
        if (in_array($tunnel_input, ['leave', 'go to tunnel', 'go tunnel', 'enter tunnel'])) {
            $tunnel_switch = true;
        } elseif (in_array($tunnel_input, ['look', 'look around'])) {
            slow_print($time_text, "\nThe walls of the dungeon are damp.\nThe only way forward is through the tunnel.\nThe light on the other side is blinding.", true);
            $tunnel_input = readline('> ');
        } else {
            slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
            $tunnel_input = readline('> ');
        }
    }
    if ($left_switch) {
        slow_print($time_text, "\nYou take one last look at your friend, then walk towards the exit.", false);
    } else {
        slow_print($time_text, "\nYou start to enter the tunnel, but your friend is too weak to go with you.\nWith shaking hands, they give you a note.", true);
        $hand_input = readline('> ');
        $hand_switch = false;
        $note_switch = false;
        $leave_switch = false;
        while (!$hand_switch) {
            if (in_array($hand_input, ['read note', 'read', 'look note', 'look at note'])) {
                slow_print($time_text, "\nIt is too dark to read the note.\nYou remember the box of matches in your pocket, empty but for one.", true);
                $hand_input = readline('> ');
            } elseif (in_array($hand_input, ['light a match', 'light match'])) {
                slow_print($time_text, "\nThe match flickers to life, and illuminates the note.\nThe note says, \"Don't leave me here.\"\nDo you leave your friend or stay?", true);
                $note_switch = true;
                $hand_input = readline('> ');
            } elseif (in_array($hand_input, ['stay']) && $note_switch || in_array($hand_input, ['stay']) && $leave_switch && !$left_switch) {
                slow_print($time_text, "\nYou sit down next to your friend.\nAs the match's flame wavers, your friend turns to you and smiles.", true);
                logo_space($time_logo);
                exit;
            } elseif (in_array($hand_input, ['leave', 'enter tunnel', 'go tunnel', 'go to tunnel'])) {
                if ($leave_switch || $left_switch) {
                    slow_print($time_text, "\nYou take one last look at your friend, then walk towards the exit.", false);
                    $hand_switch = true;
                } else {
                    slow_print($time_text, "\nThe tunnel looks unstable.\nIf you leave you may never see your friend again.\nAre you sure you want to leave your friend?", true);
                    $leave_switch = true;
                    $hand_input = readline('> ');
                }
            } elseif (in_array($hand_input, ['look', 'look around'])) {
                slow_print($time_text, "\nThe walls of the dungeon are damp.\nThe only way forward is through the tunnel.\nThe light on the other side is blinding.", true);
                $hand_input = readline('> ');
            } else {
                slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
                $hand_input = readline('> ');
            }
        }
    }

    slow_print($time_text, "\nIn your haste to escape, you dislodge part of the tunnel.\nYou narrowly avoid being crushed to death, and find yourself on a beach.", true);
    slow_print($time_text, "\nIn the water you see a majestic ship. Its sails are as white as pearls.\nIt floats in a calm, inviting manner.", true);
    $beach_input = readline('> ');
    $beach_switch = false;
    while (!$beach_switch) {
        if (in_array($beach_input, ['read note', 'read', 'look note', 'look at note'])) {
            slow_print($time_text, "\nThe note says, \"Don't leave me here.\"\nIt is too late.", true);
            $beach_input = readline('> ');
        } elseif (in_array($beach_input, ['get on boat', 'look at boat', 'get on ship', 'look at ship'])) {
            slow_print($time_text, "\nAs you board the ship, you can't help but look back at the\ncollapsed remains of the tunnel.\nYou're heading to a new world, whether you like it or not.", false);
            $beach_switch = true;
        } else {
            slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
            $beach_input = readline('> ');
        }
    }
    logo_space($time_logo);
}
echo "\n";




?>