<h2>New website contact form submission</h2>

<p><strong>Source:</strong> {{ $data['source'] ?? 'Website' }}</p>
<p><strong>Page URL:</strong> {{ $data['page_url'] ?? 'Not provided' }}</p>
<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>

<p><strong>Message:</strong></p>
<p>{!! nl2br(e($data['message'])) !!}</p>
