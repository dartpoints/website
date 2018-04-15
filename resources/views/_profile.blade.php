<div class="col-md-5">
    <div class="card">
        <div class="card-header">Your Dartpoint Profile</div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Hey, <strong>{{ Auth::user()->name }}</strong>. Welcome to Dartpoints!</li>
            <li class="list-group-item">You are currently registered as a <strong>{{ Auth::user()->house->name }}</strong> resident.</li>
            <li class="list-group-item">You have <strong><span class="badge badge-success">{{ Auth::user()->points }} points</span></strong>. Attend featured events to get dartpoints!</li>
            <li class="list-group-item">Claiming dartpoints will count towards your <strong>house's rank</strong>.</li>
            <li class="list-group-item">You can also <strong>redeem your points</strong> at our many partners!</li>
            <li class="list-group-item">Got any <strong>questions</strong>? Feel free to <a href="mailto:contact@dartmouthpoints.com">contact us</a> and fire away!</li>
        </ul>
    </div>
</div>
