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

#logo_space()

# Allow the user to input something other than enter
#startup_input = input('Press the enter button to continue...')
startup_input = 'og'

# Hidden demo
if startup_input == 'eXit' :
    # Define inventory
    inventory = {'Ruler': False}
    #print("You wake in a cold room. The walls are bare and the carpet is worn.\nThe only light is provided by a dim bulb, which hangs loosely from the ceiling.\nEven the air feels unwelcoming and hostile. The bed you lie on is uncomfortable.\nA rickety wooden desk leans against the wall.")
    wake_input = input('\nYou wake in a cold room. The walls are bare and the carpet is worn.\nThe only light is provided by a dim bulb, which hangs loosely from the ceiling.\nEven the air feels unwelcoming and hostile. The bed you lie on is uncomfortable.\nA rickety wooden desk leans against the wall.\n> ')
    # Define boolean that will let the code progress
    wake_switch = False
    while wake_switch == False :
        # Look for one of the inputs in the array
        if wake_input.count('look at desk') == 1 or wake_input.count('look desk') == 1 or wake_input.count('inspect desk') == 1 or wake_input.count('go to desk') == 1 or wake_input.count('go desk') == 1:
            # Set the boolean to true to end the while loop
            wake_switch = True
        elif wake_input.count('look at bed') == 1 or wake_input.count('look bed') == 1 or wake_input.count('inspect bed') == 1 :
            # Allow the user to input again
            wake_input = input('\nThe sheets are dusty and coarse. It is obvious that no part of the bed has been cleaned for months.\n> ')
        else :
            wake_input = input('\nI\'m sorry, I don\'t know what you mean.\n> ')

    # Generate a randomly capitalised sentence and corresponding combination from the given sentence
    note =  full_rand('exit while you still can', '.')

    desk_input = input('\nYou approach the desk. The paint is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper and a wooden ruler lay on the desk.\nThe drawer of the desk is slightly open.\n> ')
    desk_switch = False
    drawer_tried_switch = False
    drawer_open_switch = False
    while desk_switch == False :
        if desk_input.count('look at drawer') == 1 or desk_input.count('look drawer') == 1 or desk_input.count('inspect drawer') == 1 or desk_input.count('open drawer') == 1 :
            if drawer_open_switch == False :
                # If user hasn't tried the drawer and doesn't have the ruler
                if drawer_tried_switch == False and inventory['Ruler'] != 1 :
                    # User has tried the drawer
                    drawer_tried_switch = True
                    desk_input = input('\nThe drawer lies ajar, but something seems to be jamming it from opening fully.\nYou attempt to clear the blockage, but it is just out of reach.\n> ')
                # If user has tried the drawer and doesn't have the ruler
                elif drawer_tried_switch == True and inventory['Ruler'] != 1 :
                    desk_input = input('\nThe drawer still won\'t budge. Perhaps there\'s some sort of instrument that could clear the blockage?\n> ')
                # If user hasn't tried drawer and has the ruler
                elif drawer_tried_switch == False and inventory['Ruler'] == 1 :
                    # User has tried and opened the drawer
                    drawer_tried_switch = True
                    drawer_open_switch = True
                    desk_input = input('\nThe drawer lies ajar, but something seems to be jamming it from opening fully.\nAfter a few tries, you use the ruler to pry the obstruction free.\nThe drawer is empty, but you discover that the blockage was caused by a small black box.\nIt has a lock on the side that requires 5 letters.\n(Say \'lock [combination]\' to unlock.)\n> ')
                # If user has tried the drawer and now has the ruler
                elif drawer_tried_switch == True and inventory['Ruler'] == 1 :
                    drawer_open_switch = True
                    desk_input = input('\nThe drawer lies ajar, but something seems to be jamming it from opening fully.\nAfter a few tries, you use the ruler to pry the obstruction free.\nThe drawer is empty, but you discover that the blockage was caused by a small black box.\nIt has a lock on the side that requires 5 letters.\n(Say \'lock [combination]\' to unlock.)\n> ')
            # If user has opened the drawer
            else :
                desk_input = input('\nThe lock in the drawer requires 5 letters.\n(Say \'lock [combination]\' to unlock.)\n> ')
        # If user has entered 'lock' and has found lock
        elif desk_input.count('lock') == 1 and drawer_open_switch == True:
            # Find the code the user entered
            combo = desk_input[5:10]
            # If the combination matches the user's code
            if combo == note['combo'] :
                print('\nThe lock clicks open. Peering inside the box, you see a small brass key.\nYou use it to open the door to the room, and eXit.')
                print('\nCongratulations. You have passed the test.')
                print('Here is your key:')
                print('xxxet-xi--ee--tteitxxeeetiteitxe-ixxii--ee--ieeetetxitextxexx-ii-ti-xi--t-i-e--t-iiit--etxeiex-xixit-xt-iett-xxex-xtetieix--ti-e-xxxxeixt--xxeieixeitee-eiee-xt-x-i-te-txxititxeexxte-titixi-tei-xieexx-xitittx-etitx--ie--ii-exit-iixt-ei---xxitx-itiexeitxeetxtetxiitxi-e--i-x-ixtexex---e-ttttxiietitiieeixixtiexx--exexetxxeei--xi-ixitte-tei-ttiexee-xtiitixxe-tti-e-xiiieix-ex-teeixex-xieix-eiie-exx--etex-etiittett--teii-tie-extixetiexi-xit-e-tei-i-tte-tetxtiix-ieix-ttexxieiiiet--xtietieiietxx-xexeit-xt-ttexii-tei-itxi-t-t-ixxix-ei-i-txixitetei-i-xeeexixte-xxitxittti-tte--te-xetiittxxiexeteixxx')
                print('Use it wisely.\n')
                desk_switch = True
            else :
                desk_input = input('\nIncorrect combination.\n(Say \'lock [combination]\' to unlock.)\n> ')
        elif desk_input.count('look at paper') == 1 or desk_input.count('look paper') == 1 or desk_input.count('inspect paper') == 1 or desk_input.count('look at ruler') == 1 or desk_input.count('look paper') == 1 or desk_input.count('inspect ruler') == 1 :
            # If user has ruler
            if inventory['Ruler'] == 1 :
                desk_input = input('\nThe paper reads:\n'+note['full']+'\n> ')
            # If user doesn't have the ruler
            else :
                print('The ruler and the paper on the desk are less dusty than the rest of the room.\nYou pick up the ruler.')
                # Add the ruler to the inventory
                inventory['Ruler'] = True
                show_inventory(inventory)
                desk_input = input('\nYou look at the paper more closely. It reads:\n'+note['full']+'\n> ')
        elif desk_input.count('look') == 1 or desk_input.count('look desk') == 1 or desk_input.count('inspect desk') == 1 or desk_input.count('look at desk') == 1 :
            if drawer_open_switch == True :
                desk_input = input('The paint of the desk is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper lies on the desk.\nOne of the drawers is open.\n> ')
            else :
                if (inventory['Ruler'] == 1) :
                    desk_input = input('The paint of the desk is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper lies on the desk.\nOne of the drawers is slightly open.\n> ')
                else :
                    desk_input = input("\nThe paint of the desk is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper and a wooden ruler lay on the desk.\nOne of the drawers is slightly open.\n> ")
        else :
            desk_input = input('I\'m sorry, I don\'t know what you mean.\n> ')