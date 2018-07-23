<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BRAINS — brought to you by Thrillhouse OÜ</title>
		<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113621922-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-113621922-1');
		</script>
	</head>
	<body class="container mx-auto leading-normal text-indigo-dark bg-orange-lightest">
		<header id="header" class="md:flex mt-2">
			<div class="p-4 pb-0 md:pb-4 md:w-1/4">
				<img src="img/icons/game.png" alt="DASH Game">
			</div>
			<div class="p-4 pt-0 md:pt-4  md:w-3/4">
				<h1 class="text-5xl font-mono font-hairline text-orange border-b border-orange-lighter">BR<span class="font-bold">AI</span>NS</h1>
				<h2 class="mt-4">… is the working title for an upcoming browser-based idle game exploring the possibilities and consequences of humankind’s headlong dive into the development of Artificial Intelligence.</h2>
			</div>
		</header>
		<main id="main" class="border-t-2 border-indigo-dark py-4">
			<?php if (array_key_exists('medienboard', $_GET)): ?>
				<div id="mbbb" class="lg:flex flex-wrap my-8 mx-4 bg-white text-black rounded-lg shadow-lg">
					<div class="p-8 pb-0 md:p-8 md:pt-6 md:w-1/2 md:float-left lg:p-8 lg:w-1/3">
						<img src="img/logos/medienboard.png" alt="Medienboard BerlinBrandenburg">
					</div>
					<div class="p-8 pt-4 lg:p-8 lg:w-2/3">
						<h3 class="text-3xl text-red-light font-mono border-b border-red-lighter">Willkommen Medienboard BerlinBrandenburg!</h3>
						<p class="mt-2">Wir von <strong class="italic">Thrillhouse</strong> freuen uns darauf Ihnen unser neues Browserspiel <em>BR<strong>AI</strong>NS</em> für Ihre Überlegungen zur Finanzierung einer <strong class="italic">New Media Förderung</strong> vorzustellen, um die Entwicklung und Einführung unseres spannenden Spiels zu unterstützen. Für Fragen stehen wir Ihnen jederzeit gerne zur Verfügung. Sie erreichen <strong class="italic">Mike Pierce</strong> per E-Mail unter <strong class="italic"><a href="mailto:welcome@thrill.house" class="text-red-light">welcome@thrill.house</a></strong> oder telefonisch unter <strong class="italic"><a href="tel:+49 176 7029 5102" class="text-red-light">+49 176 7029 5102</a></strong>.</p>
					</div>
				</div>
			<?php endif; ?>
			<div id="concept" class="md:flex">
				<div class="p-4 md:w-1/2 lg:w-1/3">
					<h3 class="text-3xl text-orange font-mono border-b border-orange-lighter">The concept</h3>
					<p class="mt-2">Our player is in control of the development of an <strong class="italic">Artificial Intelligence</strong>, with the ability to direct it’s learning by unlocking and providing access to new <strong class="italic">abilities</strong> and <strong class="italic">data sources</strong>.</p>
					<p class="mt-2">As the <strong class="italic">AI</strong> learns more about itself and it’s surroundings, it also begins to develop an understanding of <strong class="italic">human emotion</strong>.</p>
					<p class="mt-2">As the <strong class="italic">rich, non-linear narrative</strong> of the game is slowly revealed, we begin to understand the implications of this knowledge being applied in <strong class="italic">real-world matters</strong> such as education, business, government and even <strong class="italic">consciousness</strong> itself.</p>
					<h3 class="text-3xl text-orange font-mono border-b border-orange-lighter mt-8">Get updates</h3>
					<form action="https://house.us17.list-manage.com/subscribe/post?u=eaeade5a29735d117c7e64878&amp;amp;id=b2d248551c" method="post" target="_blank" class="flex mt-4">
            <input type="email" name="EMAIL" value="" placeholder="Your Email Address" class="shadow appearance-none border rounded w-full mr-4 py-2 px-3 text-grey-darker leading-tight" required>
            <div aria-hidden="true" class="absolute" style="left: -5000px;">
              <input type="text" name="b_3198ee66c8baf4d60aa2fee6b_d60e1830e8" tabindex="-1" value="">
            </div>
            <button type="submit" class="flex-no-shrink bg-orange hover:bg-orange-dark text-sm text-white py-1 px-3 rounded">Subscribe</button>
          </form>
				</div>
				<div class="p-4 md:w-1/2 lg:w-2/3">
					<figure>
						<img src="img/screenshots/teasers.jpg" alt="Screenshot in progress" class="rounded-lg shadow-lg">
						<figcaption class="text-right italic text-sm">In progress design drafts.</figcaption>
					</figure>
				</div>
			</div>
			<div id="features" class="mt-4 md:flex border-t border-indigo-lighter pt-4">
				<div class="p-4 md:w-1/3">
					<img src="img/icons/reach.png" alt="Reach">
				</div>
				<div class="p-4 md:w-2/3">
					<h3 class="text-3xl text-orange font-mono border-b border-orange-lighter">Unique features</h3>
					<p class="mt-2"><strong class="italic">BRAINS</strong> combines elements of the proven genre of <strong class="italic">idle games</strong> with the emerging technological revolution that is <strong class="italic">cryptocurrency</strong> and <strong class="italic">blockchain</strong>.</p>
					<p class="mt-2">Unlike most idle clickers, a central component of the game is the <strong class="italic">evocative story</strong> following the exploits of the human and synthetic characters integral in the development of the AI, which unfolds in different variations based on the <strong class="italic">player’s choices</strong>.</p>
					<p class="mt-2">Players can not only compete on <strong class="italic">global leaderboards</strong> through the decentralised data storage of the blockchain, they can even <strong class="italic">interact</strong> by trading with each other for <strong class="italic">cryptocurrency</strong>.</p>
					<h3 class="text-3xl text-orange mt-4 font-mono border-b border-orange-lighter">Technology</h3>
					<ul class="mt-2">
						<li>Operates primarily in the player’s <strong class="italic">web browser</strong>, with minimal server side components necessary.</li>
						<li><strong class="italic">Cross-platform</strong> for desktop, tablet and mobile devices from any manufacturer, due to the utilisation of open web technologies.</li>
						<li>Based on innovative features of the <strong class="italic"><a href="https://www.dash.org/" class="text-indigo">Dash</a> cryptocurrency and blockchain</strong> for game session data storage and in-game, peer-to-peer transactions.</li>
					</ul>
				</div>
			</div>
			<div id="highlights" class="mt-4 md:flex flex-wrap border-t border-indigo-lighter pt-4">
				<div class="p-4 w-full">
					<h3 class="text-3xl text-orange font-mono border-b border-orange-lighter">Highlights from the design process</h3>
				</div>
				<figure class="p-4 md:w-1/2 lg:w-1/3">
					<img src="img/highlights/discussion.jpg" alt="Discussion" class="rounded-lg shadow-lg">
					<figcaption class="text-right italic text-sm">Designers in discussion.</figcaption>
				</figure>
				<figure class="p-4 md:w-1/2 lg:w-1/3">
					<img src="img/highlights/analogue-prototype.jpg" alt="Analogue prototype" class="rounded-lg shadow-lg">
					<figcaption class="text-right italic text-sm">Analogue prototyping.</figcaption>
				</figure>
				<figure class="p-4 md:w-1/2 lg:w-1/3">
					<img src="img/highlights/sketching.jpg" alt="Sketching" class="rounded-lg shadow-lg">
					<figcaption class="text-right italic text-sm">Interface sketches.</figcaption>
				</figure>
				<figure class="p-4 md:w-1/2">
					<img src="img/highlights/digital-prototype.jpg" alt="Digital prototype" class="rounded-lg shadow-lg">
					<figcaption class="text-right italic text-sm">Digital prototyping.</figcaption>
				</figure>
				<figure class="p-4 md:w-1/2">
					<img src="img/highlights/observation.jpg" alt="Observation" class="rounded-lg shadow-lg">
					<figcaption class="text-right italic text-sm">Observation and analysis.</figcaption>
				</figure>
			</div>
			<div id="roadmap" class="mt-4 md:flex flex-wrap border-t border-indigo-lighter pt-4">
				<div class="p-4 pb-0 w-full">
					<h3 class="text-3xl text-orange font-mono border-b border-orange-lighter">Roadmap <em class="text-xs bg-orange py-1 px-2 rounded-full text-white align-middle font-mono">Last update: 19.07.2018</em></h3>
				</div>
				<div class="p-4 pb-0 md:pb-4 md:w-1/2">
					<dl class="mt-2">
						<dt class="font-bold"><span class="line-through">Initial funding</span> <em class="text-xs bg-green py-1 px-2 rounded-full text-white font-mono">Complete: January, 2018</em></dt>
						<dd class="ml-4">Funding of 261 Đash (approx €70k) provided by the Dash community through the <a href="https://www.dash.org/governance/" class="text-indigo">Dash Governance System</a>.</dd>
						<dt class="mt-2 font-bold"><span class="line-through">Team assembly</span> <em class="text-xs bg-green py-1 px-2 rounded-full text-white font-mono">Complete: February, 2018</em></dt>
						<dd class="ml-4">Professionals covering game design, script writing, quality assurance, interface design, web development and project management secured. See <a href="#team" class="text-indigo">team</a> for more details.</dd>
						<dt class="mt-2 font-bold"><span class="line-through">Concept</span> <em class="text-xs bg-green py-1 px-2 rounded-full text-white font-mono">Complete: April, 2018</em></dt>
						<dd class="ml-4">Completed in team workshops with game designers and project leaders.</dd>
						<dt class="mt-2 font-bold"><span class="line-through">Mechanics</span> <em class="text-xs bg-green py-1 px-2 rounded-full text-white font-mono">Complete: May, 2018</em></dt>
						<dd class="ml-4">Tested with analogue and digital prototypes, documented and specifications recorded.</dd>
						<dt class="mt-2 font-bold">Story &amp; Script <em class="text-xs bg-blue py-1 px-2 rounded-full text-white font-mono">In progress: Q2 - Q3, 2018</em></dt>
						<dd class="ml-4">Story told in 2 acts. Character arcs defined, dialogue writing in progress.</dd>
					</dl>
				</div>
				<div class="p-4 pt-0 md:pt-4 md:w-1/2">
					<dl class="mt-2">
						<dt class="font-bold">Interface design <em class="text-xs bg-blue py-1 px-2 rounded-full text-white font-mono">In progress: Q2 - Q4, 2018</em></dt>
						<dd class="ml-4">Look and feel defined, static layouts taking shape, interaction prototyping poised to begin.</dd>
						<dt class="mt-2 font-bold">Development <em class="text-xs bg-blue py-1 px-2 rounded-full text-white font-mono">In progress: Q2 - Q4, 2018</em></dt>
						<dd class="ml-4">Front-end component structures defined. Basic but functional prototype is up and running.</dd>
						<dt class="mt-2 font-bold">User testing</dt>
						<dd class="ml-4">Projected for Q4, 2018</dd>
						<dt class="mt-2 font-bold">Quality assurance</dt>
						<dd class="ml-4">Projected for Q4, 2018</dd>
						<dt class="mt-2 font-bold">Marketing and community</dt>
						<dd class="ml-4">Projected for Q4, 2018</dd>
						<dt class="mt-2 font-bold">Launch</dt>
						<dd class="ml-4">Projected for Q1, 2019</dd>
					</dl>
				</div>
			</div>
			<div id="team" class="mt-4 flex flex-wrap border-t border-indigo-lighter pt-4">
				<div class="p-4 md:w-1/2 xl:w-1/3">
					<img src="img/icons/team.png" alt="Team">
					<h4 class="mt-2 text-3xl text-orange font-mono border-b border-orange-lighter">Meet the team</h3>
					<p class="mt-2">The <strong class="italic">multidisciplinary team</strong> has know-how in game design, interface and interaction, web development and marketing. We possess the necessary skills and expertise to produce and launch as audacious and <strong class="italic">innovative</strong> as this one. The combination of formal education with real-world experience — as well as a healthy dash of youthful exuberance and a burning desire to <strong class="italic">create amazing things</strong> — puts us in the best possible position to launch a game we can be proud of and more importantly, that the world will want to play. Our team is based in and proud to represent the city of <strong class="italic">Berlin, Germany</strong>.</p>
				</div>
				<div class="p-4 md:w-1/2 xl:w-1/3">
					<img src="img/team/mike.jpg" alt="Mike Pierce" class="rounded-lg shadow-lg">
					<h4 class="mt-2 text-xl text-orange font-mono border-b border-orange-lighter">Mike Pierce</h3>
					<h5 class="mt-2 pb-2 text-base text-orange italic">Project lead, Web development</h5>
					<ul class="mt-2">
						<li><strong class="italic">Graduated in 2005</strong> from the University of Wollongong, Australia, with a degree in Internet Science &amp; Technology.</li>
						<li><strong class="italic">13 years experience</strong> in professional web development, technical project management and digital product launch.</li>
						<li><strong class="italic">Cofounder and Technical Director</strong> of Berlin web agency <strong class="italic"><a href="https://someoneandsons.net/" class="text-indigo">Someone &amp; Sons</a></strong> since 2012.</li>
						<li>Passionate about <strong class="italic">collaborative design</strong>, board games and — obviously — his dog <strong class="italic">Athos</strong>. This is his first foray into game development.</li>
					</ul>
				</div>
				<div class="p-4 md:w-1/2 xl:w-1/3">
					<img src="img/team/sandra.jpg" alt="Sandra Schmidt" class="rounded-lg shadow-lg">
					<h4 class="mt-2 text-xl text-orange font-mono border-b border-orange-lighter">Sandra Schmidt</h3>
					<h5 class="mt-2 pb-2 text-base text-orange italic">Game design, User testing</h5>
					<ul class="mt-2">
						<li><strong class="italic">Graduated in 2017</strong> from the University of Applied Sciences, Berlin, with a degree in Game Design.</li>
						<li><strong class="italic">10 years experience</strong> in professional web development and IT, with over 5 years of experience in game design.</li>
						<li><strong class="italic">Cofounder and Lead Designer</strong> of Berlin studio <strong class="italic"><a href="https://komorebi-interactive.de/" class="text-indigo">komorebi interactive</a></strong> since 2017.</li>
						<li>Focussed on <strong class="italic">concept creation</strong>, analysis of game mechanics and logic, and <strong class="italic">formulation of functionality</strong> guided by a technical perspective.</li>
					</ul>
				</div>
				<div class="p-4 md:w-1/2 xl:w-1/3">
					<img src="img/team/kerstin.jpg" alt="Kerstin Schütt" class="rounded-lg shadow-lg">
					<h4 class="mt-2 text-xl text-orange font-mono border-b border-orange-lighter">Kerstin Schütt</h3>
					<h5 class="mt-2 pb-2 text-base text-orange italic">Game design, Narrative design</h5>
					<ul class="mt-2">
						<li><strong class="italic">Graduated in 2017</strong> from the University of Applied Sciences, Berlin with a degree in Game Design.</li>
						<li><strong class="italic">Graduated in 2013</strong> from the Technical University, Berlin, with a degree in Computer Science.</li>
						<li><strong class="italic">Working in collaboration</strong> with her business partner at <strong class="italic"><a href="#" class="text-indigo">COMPANY</a></strong> on releasing their first first commercial game.</li>
						<li>Main focus lies within <strong class="italic">Game system design</strong> and <strong class="italic">Narrative design</strong>, drawing inspiration from the lesser known events from human history.</li>
					</ul>
				</div>
				<div class="p-4 md:w-1/2 xl:w-1/3">
					<img src="img/team/dario.jpg" alt="Dario Tausch" class="rounded-lg shadow-lg">
					<h4 class="mt-2 text-xl text-orange font-mono border-b border-orange-lighter">Dario Tausch</h3>
					<h5 class="mt-2 pb-2 text-base text-orange italic">Game design, Quality assurance</h5>
					<ul class="mt-2">
						<li><strong class="italic">Graduated in 2018</strong> from the University of Applied Sciences, Berlin with a degree in Game Design.</li>
						<li><strong class="italic">Work experience</strong> includes time at Germany’s largest browser game developer, working on INSERT.</li>
						<li>Main strengths lie in the areas of <strong class="italic">​​Design thinking</strong> and <strong class="italic">Problem solving</strong>, as well as an eye for detail in the area of game mechanics and user behaviour.</li>
					</ul>
				</div>
				<div class="p-4 md:w-1/2 xl:w-1/3">
					<img src="img/team/adam.jpg" alt="Adam Ferns" class="rounded-lg shadow-lg">
					<h4 class="mt-2 text-xl text-orange font-mono border-b border-orange-lighter">Adam Ferns</h3>
					<h5 class="mt-2 pb-2 text-base text-orange italic">Interface &amp; interaction design</h5>
					
					<ul class="mt-2">
						<li><strong class="italic">Graduated in 2002</strong> from from London Guildhall University with BSc (Hons) in Communications with Audio Visual Production and Multimedia Systems.</li>
						<li><strong class="italic">More than 15 years experience</strong> working in London, Melbourne and Berlin as art director, digital designer, and UX designer for an array of large and small clients, in Fashion, Music, Tech, Health, Advertising and Entertainment.</li>
						<li>With a great love of the <strong class="italic">arts</strong>, <strong class="italic">nature</strong>, and <strong class="italic">emerging technologies</strong>, he is most interested in the intersection of these three fields, and their ability to shape society for the better.</li>
					</ul>
				</div>
				<div class="p-4 w-full">
					<h4 class="text-xl text-orange font-mono border-b border-orange-lighter">Additional contributors</h3>
					<dl class="mt-2 flex flex-wrap">
						<div class="w-full md:w-1/2 xl:w-1/4">
							<dd class="font-bold">Joy Belgassem</dd>
							<dt>Design consultant</dt>
						</div>
						<div class="w-full mt-4 md:mt-0 md:w-1/2 xl:w-1/4">
							<dd class="font-bold">Daniel McStay</dd>
							<dt>Development consultant</dt>
						</div>
						<div class="w-full mt-4 xl:mt-0 md:w-1/2 xl:w-1/4">
							<dd class="font-bold">Lukas Stockburger</dd>
							<dt>Development consultant</dt>
						</div>
						<div class="w-full mt-4 xl:mt-0 md:w-1/2 xl:w-1/4">
							<dd class="font-bold">Don Ho</dd>
							<dt>Crypto &amp; Blockchain consultant.</dt>
						</div>
					</dl>
				</div>
			</div>
		</main>
		<footer id="footer" class="border-t-2 border-indigo-dark md:flex">
			<div class="w-3/5 md:w-4/5 lg:w-3/4 p-4">
				<h6 class="text-xs italic font-light">BR<strong>AI</strong>NS is brought to you by <a href="https://thrill.house/" class="text-indigo">Thrillhouse OÜ</a></h6>
			</div>
			<div class="w-1/2 md:w-1/5 lg:w-1/4 p-4 text-center">
				<h6 class="text-xs italic font-light">Support and funding provided by:</h6>
				<a href="https://www.dash.org/"><img src="img/logos/dash.png" alt="Dash" class="mt-2"></a>
			</div>
		</footer>
	</body>
</html>