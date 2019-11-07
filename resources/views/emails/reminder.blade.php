<body>
	<h3>
		Hello {!! $detail['email'] !!}
	</h3>
	<p>
		Sombody request for changes your password, <br>
		if you dont please ignore this email, <br>
		but if you do, please clik link below for  futher intruction.
	</p>
	<a href="{{route('reminders.edit',['id' => $detail['id'],'code'=>$detail['code']])}}">Click Me</a>
	<h2>Thanks</h2>
</body>