@extends('layouts.app')

@section('content')



			<div class="row" style="margin-bottom: 1.25rem;">

            <!-- alert beginning -->
			@if (count($errors) > 0)
				<div class="col-sm-12">
					<div class="alert alert-danger" role="alert">
						<strong>Oops!</strong> Wrong image type. Allowed types: .jpg, .png, .gif
					</div>
				</div>
			@endif
            <!-- alert ending -->

			<!-- upload form *beginning* -->
            <div class="col-sm-12">
            	<div class="card">
					<div class="card-body" style="padding-bottom: 0;">
					<form method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
						@csrf
						<div class="form-row">
							<div class="form-group col-md-5">
								<input type="text" name="title" class="form-control" placeholder="Image title" required="">
							</div>
							<div class="form-group col-md-5">
							<input type="file" name="photo" class="form-control-file" required="">
							</div>
							<div class="form-group col-md-2">
								<button class="btn btn-primary btn-block" type="submit">Upload image</button>
							</div>
						</div>
					</form>
					</div>
                </div>
            </div>
			<!-- upload form *ending* -->

                <!-- image display *beginning* -->
				@foreach ($images as $image)
				<div class="col-md-4">
					<div class="card mb-4 box-shadow">
						<img alt="Card image cap" class="card-img-top" src=
						"{{ url('/uploads/'.$image->image_name) }}" alt="{{ $image->title }}">
						<div class="card-body">
							<h4 class="card-title">
								{{ $image->title }}
							</h4>

							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<a href="{{ route('view', $image->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
                <!-- image display *end* -->

                
			</div>

			<!-- pagination links *beginning* -->
			<nav>
				{{ $images->links() }}
			</nav>
			<!-- pagination links *ending* -->


@endsection


 