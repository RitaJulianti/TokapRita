@extends('admin.main')
@section('title','User Setting')
@section('content')
<h1> User Setting</h1>
<hr>
<div class="row">
	<div class="col-md-6">
		<form method="post" action="{{ route('admin.user.setting')}}">
			<div class="card  mb-3">
				<div class="card-header"><h5>Setting</h5></div>
				<div class="card-body">
					{{ csrf_field()}}

					<div class="form-group form-label-group">
						<input type="" name=""
						class="form-control"
						value="{{ old('name',$dt->name) }}"
						id="iName" placeholder="Name" required=>
						<label for="iName">Name</label>
					</div>

					<div class="form-group form-label-group">
						<input type="text" name="email"
						class="form-control" 
						value="{{ old('email',$dt->email) }}"
						id="iEmail" placeholder="Email" required>
						<label for="iEmail">Email</label>
						
					</div>
					<div class="form-group form-label-group">
						<input type="password" name="password"
						class="form-control"
						id="iPassword" placeholder="password">
						<label for="iPassword">Password</label>
						<div class="form-text text-muted">
							<small>Kosongkan password apabila tidak diubah.</small>
						</div>
					</div>
					<div class="form-group form-label-group">
						<input type="password" name="repassword"
						class="form-control"
						id="iRepassword" placeholder="Re Password">
						<label for="iRepassword">Re Password</label>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary shadow">Update</button>
						
					
					
				</div>
			</div>
		</form>
	</div>
</div>
@endsection