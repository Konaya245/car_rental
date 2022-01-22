<!-- aboot us -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Us') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
				<body>

					<div class="about-section">
					  <h1>About Us</h1>
					  <!-- <p>Some text about who we are and what we do.</p> 
					  <p>Resize the browser window to see that this page is responsive by the way.</p> -->
					</div>
					
					<h2 style="text-align:center">Our Team</h2>
					<div class="row">
					  <div class="column">
						<div class="card">
						  <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
						  <div class="container">
							<h2>Jane Doe</h2>
							<p class="title">CEO & Founder</p>
							<p>Some text that describes me lorem ipsum ipsum lorem.</p>
							<p>jane@example.com</p>
							<p><button class="button">Contact</button></p>
						  </div>
						</div>
					  </div>
					
					  <div class="column">
						<div class="card">
						  <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
						  <div class="container">
							<h2>Mike Ross</h2>
							<p class="title">Art Director</p>
							<p>Some text that describes me lorem ipsum ipsum lorem.</p>
							<p>mike@example.com</p>
							<p><button class="button">Contact</button></p>
						  </div>
						</div>
					  </div>
					  
					  <div class="column">
						<div class="card">
						  <img src="/w3images/team3.jpg" alt="John" style="width:100%">
						  <div class="container">
							<h2>John Doe</h2>
							<p class="title">Designer</p>
							<p>Some text that describes me lorem ipsum ipsum lorem.</p>
							<p>john@example.com</p>
							<p><button class="button">Contact</button></p>
						  </div>
						</div>
					  </div>
					</div>
			</div>
		</div>
	</div>
</x-app-layout>