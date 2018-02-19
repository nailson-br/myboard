@extends('main')
@section('content')
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<img alt="Bootstrap Image Preview" src="/images/task.png" />
			</div>
			<div class="col-md-10">
				<form class="form-horizontal" action="{{ url('create-service')}}" method="post" enctype="multipart/form-data">
					{!! csrf_field() !!}
					<legend>Registro de tarefas</legend>
				</form>
			</div>
		</div>
	</div>
</body>
@endsection