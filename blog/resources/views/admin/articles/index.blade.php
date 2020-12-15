<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Vagif's Admin Page</title>
    <link href="{{asset('startbootstrap-sb-admin-master/dist/')}}/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">



<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Content</th>
                    <th>Author</th>
                    <th>Image</th>
                    <th>Created Date</th>
                    <th>Updated Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{!! $article->description !!}</td>
                    <td>{!! \Illuminate\Support\Str::words($article->content, 10) !!}</td>
                    <td>{{$article->author}}</td>
                    <td><img src="{{asset('images/'.$article->image_url)}}" alt="image" width="200" height="200"></td>
                    <td>{{$article->created_at}}</td>
                    <td>{{$article->updated_at}}</td>
                    <td width="160">
                        <a href="{{route('articles.view', $article->id)}}" class="btn btn-info">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('startbootstrap-sb-admin-master/dist/')}}/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('startbootstrap-sb-admin-master/dist/')}}/assets/demo/chart-area-demo.js"></script>
<script src="{{asset('startbootstrap-sb-admin-master/dist/')}}/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="{{asset('startbootstrap-sb-admin-master/dist/')}}/assets/demo/datatables-demo.js"></script>
</body>
</html>
