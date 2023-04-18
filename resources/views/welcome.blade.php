<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            *{
                margin: 0px;
            }
            .container-flex-class{
                height: 100vh;
                margin-top: 20px;
            }
/*             .grid-container{
                display: grid;
                grid-template-areas: "form table table table";
                grid-template-columns: 0.8fr 1fr 1fr 1fr;
                grid-template-rows: 1fr;
            } */
            .form-box-class, .table-box-class{
                background-color: rgb(244, 244, 244);
                border-radius: 20px;
                box-shadow: 0px 6px 15px 4px #bcbcbc; 
                padding: 10px;
            }
        </style>
    </head>
    <body class="container-fluid container-flex-class">
        <div class="row row-cols-md-2">
            <div class="col-lg-3">
                <div class="form-box-class">
                    <form action="{{ route('saveItem') }}" method="POST" accept-charset="UTF-8">
                        {{ csrf_field() }}
                        <h1 style="font-size: 20px; margin-top: 20px;">Todo list</h1>
                        <input class="form-control" type="text" name="listItemName" placeholder="Enter task." style="color: black; margin-bottom: 5px;">
                        <button type="submit" class="form-control">Submit</button>
                    </form>
                </div>

            </div>
            <div class="col-lg-9 table-box">
                <div class="table-box-class">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                            <th scope="col">Task</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="container">
                            @foreach ($listItemsPass as $item)
                            <tr class="row m-autoimage.png">
                                <td class="col-8">
                                    <h3>{{$item->name}} </h3>
                                </td>
                                
                                <td class="col-4">
                                    <form  class="form-control" action="{{ route('markComplete', $item->id) }}" method="POST" accept-charset="UTF-8">
                                        {{csrf_field()}}
                                    
                                    <button class="form-control btn btn-primary" type="submit">Mark complete</button>
                                    </form>
                                </td>
                            </tr>
    
                        @endforeach
                        </tbody>
                    </table>
                </div>

                
            </div>
        </div>
            

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
