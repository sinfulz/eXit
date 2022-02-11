import random
import string

def logo_space() :
    print('                                                                                ')
    print('                               ▓╫╫╫╫     ╫╫╫╫▓                                  ')
    print('                   ╬╬╬╬╬╬╬╬     ╬╬╬╬╬╬╬╬╬╬╬╬╣             ╬╬╬╬                  ')
    print('                 ╬╬╬▓   ▓╬╬╬╣    ▓╬╬╬╬╬╬╬╬╬       ▓╬╬╬╬  ▓▓╬╬╬╬╣▓▓              ')
    print('              ╬╬╬╬╬╬╬╬╬╬╬╬╬╬╣    ▓╬╬╬╬╬╬╬╬╬        ╬╬╬╬╬     ╬╬╬╬               ')
    print('             ╬╬╬╬▓               ╬╬╬╬╬╬╬╬╬╬╬       ▓╬╬╬╬     ▓╬╬╬╬╬             ')
    print('           ▓╬╬╬╬╬   ╬╬╬╬╬╣     ╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬      ╬╬╬╬╬╬    ▓╬╬╬╬╣            ')
    print('          ╬╬╬╬╬╬╬╬╬╬╬╬╬▓▓    ╬╬╬╬╬╬╬▓  ╬╬╬╬╬╬╬╬     ╬╬╬╬╬╬      ▓╬╬╬╬╬          ')
    print('             ╫╫╫╫╫╫╫      ╬╫╫╫╫╫╫╫╫     ▓╫╫╫╫╫╫╫╢     ╫╫╫╫╫        ╫╫╫╫╫╫╫╢     ')
    print('                          ╬╬╬╬╬╬╬▓       ▓╬╬╬╬╬╬╬                      ▓▓▓      ')
    print('                       ▓╬╬╬╬╬╬╬▓          ╬╬╬╬╬╬╬╬╬╬                            ')
    print('                                                                                ')

# Display the current inventory
def show_inventory(inventory) :
    print("        INVENTORY")
    # For each item in the inventory
    for item in inventory :
        # If the user has the item
        if inventory[item] == True :
            print('| '+item)

def word_rand(word) :
    output = ''
    cap_combo = ''
    # Get the length of the word
    length = len(word)
    # Choose a random letter to be capital
    random_letter = random.randint(0, length-1)
    # For the length of the word
    i = 0
    while i < length :
        # If chosen to be capital
        if random_letter == i :
            # Add capital to full output
            # add the capitalised version of the letter in the place indicated the random number
            output += word[i:i+1].upper()
            # Add capital to combo
            cap_combo += word[i:i+1].upper()
        else :
            # Add lowercase to full output
            output += word[i]
        i += 1
    # Return the letter for the combo and full output
    return_val = {'combo': cap_combo, 'full': output}
    return return_val

def full_rand(sentence, end) :
    output = ''
    combo = ''
    sentence = sentence.lower()
    # Make an array of the words in the sentence
    words = sentence.split(' ')
    # For each word in the sentence
    for word in words :
        # Randomise it using the above function
        randomised = word_rand(word)
        # Assign the combo to a variable
        combo += randomised['combo']
        # Assign the full word to a variable
        output += randomised['full']
        # If this is the last word in the sentence
        if words[-1] == word :
            # Add the 'end' to the sentence
            output += end
            # If this isn't the last word in the sentence
        else :
            # Add a space to the end
            output += ' '
    # Return the letter for the combo and full output
    return_val = {'combo': combo, 'full': output}
    return return_val

logo_space()

# Allow the user to input something other than enter
startup_input = input('Press the enter button to continue...')

# Hidden demo
if startup_input == 'eXit' :
    # Define inventory
    inventory = {'Ruler': False}
    #print("You wake in a cold room. The walls are bare and the carpet is worn.\nThe only light is provided by a dim bulb, which hangs loosely from the ceiling.\nEven the air feels unwelcoming and hostile. The bed you lie on is uncomfortable.\nA rickety wooden desk leans against the wall.")
    current_input = input('\nYou wake in a cold room. The walls are bare and the carpet is worn.\nThe only light is provided by a dim bulb, which hangs loosely from the ceiling.\nEven the air feels unwelcoming and hostile. The bed you lie on is uncomfortable.\nA rickety wooden desk leans against the wall.\n> ')
    # Define boolean that will let the code progress
    wake_switch = False
    while wake_switch == False :
        # Look for one of the inputs in the array
        if current_input == 'look at desk' or current_input == 'look desk' or current_input == 'inspect desk' or current_input == 'go to desk' or current_input == 'go desk':
            # Set the boolean to true to end the while loop
            wake_switch = True
        elif current_input == 'look at bed' or current_input == 'look bed' or current_input == 'inspect bed' :
            # Allow the user to input again
            current_input = input('\nThe sheets are dusty and coarse. It is obvious that no part of the bed has been cleaned for months.\n> ')
        else :
            current_input = input('\nI\'m sorry, I don\'t know what you mean.\n> ')

    # Generate a randomly capitalised sentence and corresponding combination from the given sentence
    note =  full_rand('exit while you still can', '.')

    current_input = input('\nYou approach the desk. The paint is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper and a wooden ruler lay on the desk.\nThe drawer of the desk is slightly open.\n> ')
    desk_switch = False
    drawer_tried_switch = False
    drawer_open_switch = False
    while desk_switch == False :
        if current_input == 'look at drawer' or current_input == 'look drawer' or current_input == 'inspect drawer' or current_input == 'open drawer' :
            if drawer_open_switch == False :
                # If user hasn't tried the drawer and doesn't have the ruler
                if drawer_tried_switch == False and inventory['Ruler'] != 1 :
                    # User has tried the drawer
                    drawer_tried_switch = True
                    current_input = input('\nThe drawer lies ajar, but something seems to be jamming it from opening fully.\nYou attempt to clear the blockage, but it is just out of reach.\n> ')
                # If user has tried the drawer and doesn't have the ruler
                elif drawer_tried_switch == True and inventory['Ruler'] != 1 :
                    current_input = input('\nThe drawer still won\'t budge. Perhaps there\'s some sort of instrument that could clear the blockage?\n> ')
                # If user hasn't tried drawer and has the ruler
                elif drawer_tried_switch == False and inventory['Ruler'] == 1 :
                    # User has tried and opened the drawer
                    drawer_tried_switch = True
                    drawer_open_switch = True
                    current_input = input('\nThe drawer lies ajar, but something seems to be jamming it from opening fully.\nAfter a few tries, you use the ruler to pry the obstruction free.\nThe drawer is empty, but you discover that the blockage was caused by a small black box.\nIt has a lock on the side that requires 5 letters.\n(Say \'lock [combination]\' to unlock.)\n> ')
                # If user has tried the drawer and now has the ruler
                elif drawer_tried_switch == True and inventory['Ruler'] == 1 :
                    drawer_open_switch = True
                    current_input = input('\nThe drawer lies ajar, but something seems to be jamming it from opening fully.\nAfter a few tries, you use the ruler to pry the obstruction free.\nThe drawer is empty, but you discover that the blockage was caused by a small black box.\nIt has a lock on the side that requires 5 letters.\n(Say \'lock [combination]\' to unlock.)\n> ')
            # If user has opened the drawer
            else :
                current_input = input('\nThe lock in the drawer requires 5 letters.\n(Say \'lock [combination]\' to unlock.)\n> ')
        # If user has entered 'lock' and has found lock
        elif current_input == 'lock' and drawer_open_switch == True:
            # Find the code the user entered
            combo = current_input[5:10]
            # If the combination matches the user's code
            if combo == note['combo'] :
                print('\nThe lock clicks open. Peering inside the box, you see a small brass key.\nYou use it to open the door to the room, and eXit.')
                print('\nCongratulations. You have passed the test.')
                print('Here is your key:')
                print('xxxet-xi--ee--tteitxxeeetiteitxe-ixxii--ee--ieeetetxitextxexx-ii-ti-xi--t-i-e--t-iiit--etxeiex-xixit-xt-iett-xxex-xtetieix--ti-e-xxxxeixt--xxeieixeitee-eiee-xt-x-i-te-txxititxeexxte-titixi-tei-xieexx-xitittx-etitx--ie--ii-exit-iixt-ei---xxitx-itiexeitxeetxtetxiitxi-e--i-x-ixtexex---e-ttttxiietitiieeixixtiexx--exexetxxeei--xi-ixitte-tei-ttiexee-xtiitixxe-tti-e-xiiieix-ex-teeixex-xieix-eiie-exx--etex-etiittett--teii-tie-extixetiexi-xit-e-tei-i-tte-tetxtiix-ieix-ttexxieiiiet--xtietieiietxx-xexeit-xt-ttexii-tei-itxi-t-t-ixxix-ei-i-txixitetei-i-xeeexixte-xxitxittti-tte--te-xetiittxxiexeteixxx')
                print('Use it wisely.\n')
                desk_switch = True
            else :
                current_input = input('\nIncorrect combination.\n(Say \'lock [combination]\' to unlock.)\n> ')
        elif current_input == 'look at paper' or current_input == 'look paper' or current_input == 'inspect paper' or current_input == 'look at ruler' or current_input == 'look paper' or current_input == 'inspect ruler' :
            # If user has ruler
            if inventory['Ruler'] == 1 :
                current_input = input('\nThe paper reads:\n'+note['full']+'\n> ')
            # If user doesn't have the ruler
            else :
                print('\nThe ruler and the paper on the desk are less dusty than the rest of the room.\nYou pick up the ruler.')
                # Add the ruler to the inventory
                inventory['Ruler'] = True
                show_inventory(inventory)
                current_input = input('\nYou look at the paper more closely. It reads:\n'+note['full']+'\n> ')
        elif current_input == 'look' or current_input == 'look desk' or current_input == 'inspect desk' or current_input == 'look at desk' :
            if drawer_open_switch == True :
                current_input = input('\nThe paint of the desk is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper lies on the desk.\nOne of the drawers is open.\n> ')
            else :
                if (inventory['Ruler'] == 1) :
                    current_input = input('\nThe paint of the desk is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper lies on the desk.\nOne of the drawers is slightly open.\n> ')
                else :
                    current_input = input('\nThe paint of the desk is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper and a wooden ruler lay on the desk.\nOne of the drawers is slightly open.\n> ')
        else :
            current_input = input('\nI\'m sorry, I don\'t know what you mean.\n> ')

# Show-accurate version
elif startup_input == 'og' :
    current_input = input('\nYou\'re trapped in a dungeon with your friend. You see a barrel.\nWhat do you do?\n> ')
    while current_input != 'move barrel' :
        current_input = input('\nYou can\'t do that here.\n> ')

    current_input = input('\nThe barrel rolls aside and you find a secret tunnel.\n> ')
    while current_input != 'enter tunnel' :
        current_input = input('\nYou can\'t do that here.\n> ')

    current_input = input('\nYou start to escape but your friend is too weak to go.\nThey hand you a note.\n> ')
    leave_switch = False
    read_switch = False
    while leave_switch == False :
        if current_input == 'read note' and read_switch == False :
            current_input = input('It is too dark to read the note.\n> ')
        elif current_input == 'light a match' and read_switch == False:
            read_switch = True
            current_input = input('\nThe note says, "Don\'t leave me here."\nDo you leave your friend or stay?\n> ')
        elif current_input == 'stay' and read_switch == True:
            logo_space()
            exit()
        elif current_input == 'leave' and read_switch == True:
            leave = True
        else :
            current_input = input('\nYou can\'t do that here.\n> ')

    current_input = input('\nYou crawl through a tunnel and the tunnel leads to a beach.\n> ')
    while current_input != 'look' :
        current_input = input('\nYou can\'t do that here.\n> ')

    current_input = input('\nIn the water you see a boat.\n> ')
    while current_input != 'get on boat' :
        current_input = input('You can\'t do that here.\n> ')
    print('\nCongratulations, you\'re heading to a new world!')

# More detailed version
else :
    current_input = input('You\'re trapped in a dungeon with your friend.\nThey are injured, and sit slumped against a wall.\nThere is a barrel in front of you.\n> ')
    sit_switch = False
    left_switch = False
    note_switch = False
    while (current_input == 'look at barrel' or current_input == 'look barrel' or current_input == 'inspect barrel' or current_input == 'move barrel') == False :
        if current_input == 'sit' or current_input == 'sit down' or current_input == 'sit with friend' or current_input == 'sit down with friend' or current_input == 'sit with my friend' or current_input == 'sit down with my friend' and sit_switch == False :
            sit_switch = True
            current_input = input('\nAs you sit down next to your friend, they hand you a note.\n> ')
        elif (current_input == 'read note' or current_input == 'read' or current_input == 'look note' or current_input == 'look at note') and sit_switch == True and note_switch == False:
            current_input = input('\nIt is too dark to read the note.\nYou remember the box of matches in your pocket, empty but for one.\n> ')
        elif current_input == 'light a match' or current_input == 'light match' and sit_switch == True and note_switch == False:
            note_switch = True
            current_input = input('\nThe match flickers to life, and illuminates the note.\nThe note says, "Don\'t leave me here."\nDo you leave your friend or stay?\n> ')
        elif current_input == 'stay' and sit_switch == True and note_switch == True :
            print('\nYou stay seated next to your friend.\nAs the flame of the match wavers, your friend turns to you and smiles.\n')
            logo_space()
            exit()
        elif current_input == 'leave' and sit_switch == True:
            left_switch = True
            current_input = input('\nYou stand up and look for a way out.\nThe barrel looks light enough to move.\n> ')
        elif current_input == 'look' or current_input == 'look around' :
            current_input = input('\nThe walls of the dungeon are damp. Your friend is still sitting.\n> ')
        else :
            current_input = input('\nI\'m sorry, I don\'t know what you mean.\n> ')

    current_input = input('\nFlecks of paint fall from the barrel when you touch it.\nIts metal frame, rusted and worn, creaks as you roll it aside.\nIn its place lies the entrance to a secret tunnel.\n> ')
    while (current_input == 'leave' or current_input == 'go to tunnel' or current_input == 'go tunnel' or current_input == 'enter tunnel') == False :
        if current_input == 'look' or current_input == 'look around' :
            current_input = input('\nThe walls of the dungeon are damp.\nThe only way forward is through the tunnel.\nThe light on the other side is blinding.\n> ')
        else :
            current_input = input('\nI\'m sorry, I don\'t know what you mean.\n> ')

    # If the user has already chosen to leave
    if left_switch == True:
        print('\nYou take one last look at your friend, then walk towards the exit.')
    else :
        current_input = input('\nYou start to enter the tunnel, but your friend is too weak to go with you.\nWith shaking hands, they give you a note.\n> ')
        hand_switch = False
        note_switch = False
        leave_switch = False
        while hand_switch == False :
            if (current_input == 'read' or current_input == 'read note' or current_input == 'look note' or current_input == 'look at note') and note_switch == False :
                current_input = input('\nIt is too dark to read the note.\nYou remember the box of matches in your pocket, empty but for one.\n> ')
            elif current_input == 'light match' or current_input == 'light a match' and note_switch == False :
                note_switch = True
                current_input = input('\nThe match flickers to life, and illuminates the note.\nThe note says, "Don\'t leave me here."\nDo you leave your friend or stay?\n> ')
            elif current_input == 'stay' and note_switch == True or current_input == 'stay' and leave_switch == False:
                print('\nYou sit down next to your friend.\nAs the flame of the match wavers, your friend turns to you and smiles.')
                logo_space()
                exit()
            elif (current_input == 'leave' or current_input == 'enter tunnel' or current_input == 'go tunnel' or current_input == 'go to tunnel') :
                if leave_switch :
                    print('\nYou take one last look at your friend, then walk towards the exit.')
                    hand_switch = True
                else :
                    leave_switch = True
                    current_input = input('\nThe tunnel looks unstable.\nIf you leave you may never see your friend again.\nAre you sure you want to leave your friend?\n> ')
            elif current_input == 'look' or current_input == 'look around' :
                current_input = input('\nThe walls of the dungeon are damp.\nThe only way forward is through the tunnel.\nThe light on the other side is blinding.\n> ')
            else :
                current_input = input('\nI\'m sorry, I don\'t know what you mean.\n> ')

    print('In your haste to escape, you dislodge part of the tunnel.\nYou narrowly avoid being crushed to death, and find yourself on a beach.')
    current_input = input('\nIn the water you see a majestic ship. Its sails are as white as pearls.\nIt floats in a calm, inviting manner.\n> ')
    while (current_input == 'get on boat' or current_input == 'look at boat' or current_input == 'get on ship' or current_input == 'look at ship') == False :
        if current_input == 'read' or current_input == 'read note' or current_input == 'look' or current_input == 'look at note' :
            current_input = input('\nThe note says, \n"Don\'t leave me here."\nIt is too late.\n> ')
        else :
            current_input = input('\nI\'m sorry, I don\'t know what you mean.\n> ')

    print('\nAs you board the ship, you can\'t help but look back at the\ncollapsed remains of the tunnel.\nYou\'re heading to a new world, whether you like it or not.')
    logo_space()
    print('\n')