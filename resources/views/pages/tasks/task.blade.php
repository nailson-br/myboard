@extends('main')
@section('content')
<script type="text/javascript">
  
  function defineTeamKey() {

    var team = document.getElementById("team");
    var key = document.getElementById("key");

    if (team.value == "" ){
    	key.textContent = "Key-";
    } else {
    	key.textContent = team.value;
    }
}

</script>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<img alt="Bootstrap Image Preview" src="/images/task.png" />
			</div>
			<div class="col-md-10">
				<form class="form-horizontal" action="{{ url('create-service')}}" method="post" enctype="multipart/form-data">
					<fieldset>
						{!! csrf_field() !!}
						<legend>Registro de tarefas</legend>
						<div class="row">
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-1 control-label" for="team">Time</label>
								<div class="col-md-3">
									<select id="team" name="team" class="form-control" onchange="defineTeamKey()">
		                                <option value="">-- selecione --</option>
		                                <option value="PV20-">IENE</option>
		                                <option value="RUP-">RÚPIA</option>
                            		</select>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-1 control-label" for="task">Tarefa</label>
								<label class="col-md-1 control-label" style="padding-right: 0px" id="key" for="task">Key-</label>
								<div class="col-md-2">
									<input id="task" name="task" type="text" placeholder="task" class="form-control input-md">
								</div>
								<label class="col-md-1 control-label" for="description">Descrição</label>
								<div class="col-md-7">
									<input id="description" name="description" type="text" placeholder="description" class="form-control input-md">
								</div>
							</div>
						</div>

						<div class="row">
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-1 control-label" for="taskType">Tipo</label>
								<div class="col-md-3">
									<select id="taskType" name="taskType" class="form-control">
		                                <option value="">-- selecione --</option>
		                                <option value="Épico">Épico</option>
		                                <option value="História">História</option>
		                                <option value="Tarefa">Tarefa</option>
		                                <option value="Bug">Bug</option>
		                                <option value="Sub-tarefa">Sub-tarefa</option>
		                                <option value="Sub-tarefa-bug">Sub-tarefa-bug</option>
                            		</select>
								</div>

								<label class="col-md-1 control-label" for="jobType">Frente</label>
								<div class="col-md-3">
									<select id="jobType" name="jobType" class="form-control">
		                                <option value="">-- selecione --</option>
		                                <option value="frontend">Frontend</option>
		                                <option value="backend">Backend</option>
		                                <option value="qa">QA</option>
		                                <option value="outras">outras</option>
                            		</select>
								</div>

								<!-- Select input-->
								<label class="col-md-1 control-label" for="assignedTo">Respons.</label>
								<div class="col-md-3">
									<select id="assignedTo" name="assignedTo" class="form-control">
		                                <option value="">-- selecione --</option>
		                                <option value="Adriano">Adriano</option>
		                                <option value="Francisco">Francisco</option>
		                                <option value="Ivens">Ivens</option>
		                                <option value="Ítalo">Ítalo</option>
		                                <option value="Manoel">Manoel</option>
		                                <option value="Nailson">Nailson</option>
		                                <option value="Renato">Renato</option>
		                                <option value="Thiago">Thiago</option>
                            		</select>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="form-group">
								<!-- Text input-->
								<label class="col-md-1 control-label" for="effort">Esforço</label>
								<div class="col-md-3">
									<input id="effort" name="effort" type="text" placeholder="esforço" class="form-control input-md">
								</div>

								<!-- Select input-->
								<label class="col-md-1 control-label" for="size">Size</label>
								<div class="col-md-3">
									<select id="size" name="size" class="form-control">
		                                <option value="">-- selecione --</option>
		                                <option value="PP">PP</option>
		                                <option value="P">P</option>
		                                <option value="M">M</option>
		                                <option value="G">G</option>
		                                <option value="GG">GG</option>
	                        		</select>
								</div>

								<!-- Text input-->
								<label class="col-md-1 control-label" for="sp">SP</label>
								<div class="col-md-3">
									<select id="sp" name="sp" class="form-control">
		                                <option value="">-- selecione --</option>
		                                <option value="1">1</option>
		                                <option value="2">2</option>
		                                <option value="3">3</option>
		                                <option value="5">5</option>
		                                <option value="8">8</option>
		                                <option value="13">13</option>
		                                <option value="21">21</option>
	                        		</select>
								</div>
							</div>
						</div>

						<div class="row">
							<!-- Button (Double) -->
							<div class="form-group">
								<label class="col-md-1 control-label" for="submit"></label>
								<div class="col-md-5">
									<button id="submit" name="submit" class="btn btn-primary" type="submit">Salvar</button>
									<button id="cancel" name="cancel" class="btn btn-danger" type="button" onclick="window.location='{{ URL::previous() }}'">Cancelar</button>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
@endsection