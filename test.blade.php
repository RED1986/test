tml>
<head>
</head>
<body>
<h1>Список адресов</h1>
<ul>
 @foreach($addlist as $address)
	 <li>{{ $address->address }}</li>
 @endforeach
</ul>
 <form method="GET" action="{{ route('testadd') }}">
<h3>Добавить источник</h3>
<input name="address" type="text">
<input type="submit" value="Добавить">
</form>
<h1>Курсы Валют</h1>
<table>
<tbody>
 @foreach($outarray as $items)
 <tr>
	 @foreach($items as $item)
	 <td>{{ $item }}<td>
	@endforeach
</tr>
 @endforeach
</tbody>
</table>
</body>
</html>
