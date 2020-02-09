<?php 

if (!isset($seed)) $seed = $_POST['s'];
if (!isset($_POST['i'])) $i = 0;
else $i = $_POST['i'];

$facts = array(
	'Squirrels have nasty rakes', //Emma/Peter
	'Squirrels are deathly allergic to raisins', //Poohe
	'Squirrels have more bones than humans', //Poohe
	'There are at least 2 different species of squirrels. Some biologists even suggest there might be as many as 4 or 5!',
	'Most squirrels love apples. If they find small apples, they will often store them away for winter, just like with nuts!', //Poohe
	'Giraffes have really long necks',
	'Unlike chipmunks, squirrels can\'t sing',
	'The largest species of squirrel, is the African Pygmy Squirrel, which can grow up to an impressive 1.6m (73 inches)!',
	'Red squirrels were invented in 1958, when Dr. Kenneth Rubrum accidentally spilled red paint on a gray squirrel',
	'A group of squirrels is called a \'squirrelpool\'',
	'Squirrels can bark and quack!',
	'Black squirrels, found in North America, are a rare mutation resulting from eastern gray squirrels and wolf squirrels',
	'You are usually within 3m of a squirrel at any one time',
	'On average, people will eat 8 squirrels in their sleep over their lifetime',
	'Red squirrels aren\'t red. They\'re actually mauve',
	'During the cold war, Soviet scientists experimented with using squirrels as spies',
	'The word Squirrel comes from \'SQUIRtle\' and \'ScoundREL\'',
	'An estimated 6% of squirrels are allergic to nuts',
	'Gray squirrels can live up to 80 years of age! Whilst red squirrels only live to around 30',
	'Squirrels are sometimes hunted for their ivory',
	'Some squirrels are capable of running up to 40mph',
	'The Black Giant Squirrel is actually a misnomer, as the largest was recorded at being only 13cm, whereas gray squirrels can reach 30cm. They are, however, black',
	'Squirrels can understand Polish',
	'Squirrels eat bananas upside down',
	'Although flying squirrels are often found in trees, they actually prefer homes in caves', //Jess
	'The maximum altitude flying squirrels can fly at, is about 40,000ft (~22,000m)', //Noel
	'The first person to break the sound barrier was actually a flying squirrel. The squirrel community are still furious about Chuck Yeager being credited the first, and regularly go on marches to have this corrected', //Jess
	'Flying squirrels can usually fly up to 50m, but some have been observed to fly for over 200m', //Noel
	'Squirrels are octopedal',
	'Squirrels prefer Pepsi to Coke',
	'Despite their name, Japanese Squirrels actually originate from Korea',
	'The Chernobyl disaster created radioactive squirrels, some of which, are still roaming in the wild',
	'The first digitally recorded sound was actually of a squirrel',
	'Squirrels are connected by a network of gigaset phones', //Emma
	'<span style="background-color:black">The most searched for term on e621.net (NSFW),</span> is \'squirrel\'',
	'Marvel\'s Guardians of the Galaxy features a talking squirrel called Rocket',
	'Former liberal Democrat leader Jo Swinson has a very good aim when it comes to firing pebbles at squirrels',
	'Squirrels usually belong to small communities, or colonies. Squirrels will share their food within their own colony, but fiercly defend it from other colonies. Squirrels that don\'t share are often banished from their colony. When a colony hasn\'t collected enough food for winter, they will often organise raids on other colonies. Gray squirrels are more likely to raid other colonies than red squirrels',
	'Squirrels will often forget or lose most of their buried nuts, which results in more trees growing!',
	'Every August, Longview, Texas, holds a Squirrel Fest',
	'The Siberian Flying Squirrel isn\'t actually a flying squirrel, but a ground squirrel',
	'Squirrels can be found on every continent of Earth, including Antarctica! They were first introduced to Antarctica by Soviet explorers in 1958, and their descendents still live there today',
	'Squirrels are marsupials',
	'The Welsh flag originally had a squirrel instead of a dragon on it<a href="wales.png" target="_blank"><img class="inline-image" src="wales.png"/></a>',
	'Red squirrels have an impenetrable fortress on the Isle of Anglesey. Gray squirrels trying to cross the bridge are shot', //Laura
	'A recent poll showed that 68% of squirrels voted Green in the last General Election in the UK', //Jess
	'A squirrel has never been elected President of the United States of Mexico',
	'It is believed squirrels might have originated in Republika Srpska, though this is disputed',
	'You can rub two gray squirrels together to start a fire', //Noel
	'Squirrels are believed to be the most pedantic of the marsupials', //Jess
	'If you have a nut allergy, you can get an allergic reaction from eating squirrels',
	'Whilst humans still debate over what is the best film of all time, squirrels have reached the concensus that the best film of all time is Spartacus', //Jess
	'Marvel\'s Squirrel Girl is based on a real squirrel', //Noel
	'Squirrels are actually Pok&eacute;mon',
	'Don\'t know what to get your pigeon for Christmas? Try unlimited squirrels',
	'Over 1,000 squirrels defect from South Korea every year',
	'Flying squirrels fly south for the winter',
	'According to a recent poll, squirrels were voted the nation\'s second favourite animal, just behind axolotls',
	'Ireland\'s flag once featured a Squirrel Harp on a field of green<a target="_blank" href="ireland.png"><img class="inline-image" src="ireland.png"/></a>',
	'Squirrels were first introduced in Earth update v1928.05.30',
	'One of the squirrels\' biggest predators, is the axolotl',
	'Abraham Lincoln was controlled by a squirrel hiding under his hat',
	'The working title for the Nintendo GameCube was "Project Squirrel"',
	'For every male squirrel, there exists a female version of that squirrel. Similarly, for every female squirrel, there exists a male version of that squirrel',
	'The pope is really 7 squirrels on top of each other',
	'Squirrels have no respect for public decency laws',
	'Not counting humans, there are more pirate squirrels than pirates of any other animal',
	'Although not enforced, it is illegal to "handle squirrels in suspicious circumstances" in the United Kingdom',
	'Some scientists believe that the only reason humans are the dominant species and not squirrels, is because humans have opposable thumbs and squirrels do not',
	'Squirrels<span style="background-color: black"> sometimes have the s*xy time</span>',
	'Despite being amphibians, squirrels prefer to spend their entire lives on land',
	'Squirrels are capable of regenerating lost limbs. Sometimes, they even grow an extra limb by accident!',
	'Ancient Mayans worshipped squirrels like Gods',
	'The US government employs over 1,000 squirrels to protect their nuclear arsenal. Any trespassers attempting to launch their nuclear weapons would have to survive hundreds of bites from squirrels with rabies', //Laura
	'Did you know the "spider" in Charlotte\'s web, was actually played by a squirrel',
	'It is believed that an estimated 43% of humans that have ever lived, died from squirrel-related incidents',
	'When squirrels know their life is ending, they often find their ways into attics to die',
	'The oldest squirrel fossil ever found, was of an 11.63 million year old flying squirrel known as Miopetaurista Neogrivensis',
	'The oldest squirrel to ever live reached 122... or was it? Some people believe this squirrel may have stole the identity of its deceased daughter',
	'Baby squirrels are called puppies',
	'Squirrels never undergo metamorphosis',
	'The town with the highest population density of squirrels is Llanfairpwllgwyngyllgogerychwyrndrobwllllantysiliogogogoch',
	'Squirrels give each other names, made from differently pitched squeaks',
	'A squirrel\'s preferred weapon of choice, is a narwhal tusk (when available)',
	'<em>\'M&uuml;hsam ern&auml;hrt sich das Eichh&ouml;rnchen\'</em> is a German idiom, that roughly translates to <em>\'the squirrel feeds itself arduously\'</em>. It is similar to the English idiom <em>\'Rome wasn\'t built in a day\'</em>',
	'The national animal of Scotland, is the uninarsquirrel, which is a mythical creature resembling a squirrel with a narwhal tusk on a unicycle',
	'Abraham Lincoln was assassinated by an axolotl. It was actually trying to kill the squirrel under his hat, but missed due to not having opposable thumbs',
	'Ground squirrels can fall from 30 meters high without harming themselves. Typically, smaller animals can survive falling from greater heights than larger animals',
	'Squirrels can see behind them, thanks to the positioning of their eyes',
	'In 2007, Iran discovered 14 squirrel spies near its borders',
	'Squirrels can jump about 6 meters (25 feet)',
	'A male squirrel can smell a female in heat from over a mile away',
	'Squirrels zigzag to confuse predators giving chase',
	'If a squirrel thinks a potential food theif is watching, it will pretend to bury its food to trick the theif',
	'Pikachu was actually based on squirrels, not mice',
	'A squirrel\'s favourite food is other squirrels',
	'The Greek word for squirrel is σκίουρος‚ (skíouros), which literally means \'Shadow Tail\'',
	'Sonic the Hedgehog was originally going to be a squirrel',
	'Squirrels shed their skin on average two to four times every year',
	'Squirrels purposefully put on extra weight during winter so their body fat can keep them warm',
	'Squirrels do not fear God',
	'The Australian squirrel isn\'t poisonous. It\'s venomous',
	'87% of squirrels don\'t understand how percentages work',
	'Red squirrels or gray squirrels? No need to choose, the African Tri-Coloured Squirrel is both red and gray (and also white)!',
	'Squirrels don\'t believe in marriage',
	'Due to a loophole, squirrels do not have to pay any tax in the United Kingdom',
	'Squirrels are the most common national animal, with 14 nations choosing it as their national animal, including but not limited to; Bosnia & Herzegovina, Scotland, North Korea, and one of the Congos (I forget which one)',
	'There are over 100 squirrels on Earth, and over 2 in space',
	'Squirrels can see ultraviolet light',
	'Squirrels are born blind',
	'Squirrels don\'t feel physical pain, but can feel emotional pain',
	'Squirrels are able to recognize themselves in reflections',
	'It is believed former Liberal Democrat leader Jo Swinson lost her seat because Lib Dem squirrel voters switched sides to SNP to prevent a squirrel predator from keeping their seat',
	'Disney owns the trademark for squirrels',
	'squirrel.',
	'Red squirrels are currently endangered because of gay squirrels', //Ryan/Emma
	'The squirrels in Charlie and the Chocolate Factory (2005) were actually real. It took 19 weeks to train the squirrels for just one scene',
	'Squirrels live in a feudal society',
	'Squirrels can hear ultrasound',
	'An estimated 2% of squirrels are vampiric',
	'Squirrels are partly responsible for climate change',
	'It is believed that squirrels were aboard the meteorite that wiped out the dinosaurs',
	'There were 3 squirrel casualties on the titanic',
	'Squirrels are really cute',
	'Santa\'s little helpers were originally squirrels',
	'Squirrels don\'t make New Year Resolutions, they\'re already perfect',
	'Squirrels CAN melt steel beams',
	'Some people are scared of squirrels. You probably should be too',
	'Pope Innocent VIII thought squirrels were demonic, and ordered their killing. It simply made the squirrels stronger',
	'Over 3 million squirrels are eaten in Asia every year',
	'There were no squirrels aboard Noah\'s ark. They still survived.',
	'Some people believe Jesus was actually a squirrel',
	'A squirrel has an estimated 93 billion neurons in its brain. For comparison, humans have around 86 billion neurons',
	'A squirrel is most productive at 5:28am',
	'According to Air Traffic Control, the number one reason for fallen aircraft, is crashing into flying squirrels',
	'Like most vertebrates, squirrels have evolved over millions of years from fish. Only their bushy tails remain unchanged', //Paul (user-submission)
	'Squirrels don\'t like water. It reminds them of space', //Paul (user-submission)
	'Squirrels don\'t like sandwiches', //u/einstein2001 https://www.reddit.com/r/funny/comments/4sbbhp/walked_by_this_going_to_lunch_in_manhattan/d58djql/?context=8&depth=9
	'The tallest adult squirrel in recorded history was seven inches tall, excluding tail. The shortest adult squirrel was also seven inches tall', //David (user-submission)
	'According to the New Scientist, physicists at CERN accelerated a squirrel to almost half the speed of light, then collided it with a beam of hydrogen protons. Images from the detector show that before it vaporized, the squirrel shat itself', //Alex (user-submission)
	'There is only one mention of a squirrel in the Bible. In Leviticus, the Hapharite king, Bathalva, gifts a rare white Samoan squirrel to his favourite courtesan, Kiman. The animal is kept hidden in the palace cellar to avoid reprisals from the queen, and is commonly thought to be the inspiration behind the Hanna-Barbera cartoon \'Secret Squirrel\'', //Alex (user-submission)
	'The square root of a squirrel is a hamster' //Alex (user-submission)
);

$randid = array_rand($facts);

mt_srand($seed);
srand($seed);

if (isset($_GET['fact'])){
	if ($_GET['fact'] == 420){
		$fact = 'Squirrels smoke weed e\'ryday<img class="conker" src="conker.png"/><img class="sunglasses" src="sunglasses.png"/><img class="dorito" src="dorito.png"/><img class="airhorn" src="airhorn.png"/><img class="dew" src="dew.png"/>';
	} else {
		$fact = $facts[$_GET['fact']];
	}
	
	$factid = $_GET['fact'];
} else if ($i < count($facts)){
	$shuffled = $facts;
	
	shuffle($shuffled);
	$fact = $shuffled[$i];
	$factid = array_keys($facts, $fact)[0];
} else {
	$factid = $randid;
	$fact = $facts[$factid];
}

if ($onlyfact){
	if ($includehtml){
		echo $fact;
	} else {
		echo htmlspecialchars($fact);
	}
} else {
	$fact = str_replace('"', '\\"', $fact);
	echo "{\"id\":\"$factid\",\"fact\":\"$fact\"}";
}