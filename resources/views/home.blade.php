<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Chat App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="jumbotron text-center mt-8">
        <h1>Fadel.com Chat App</h1>
    </div>
    <hr>
    <div class="container m-8">
        <div class="row m-8 p-5">
            <div class="col-xs-6">
                <div class="card">
                    <div class="card-body">
                        <div id="messageOutput" class="mb-3"></div>
                        <hr>
                        <form id="chatForm">
                            <div class="form-group mb-3">
                                <input type="text" id="message" class="form-control" placeholder="Message">
                            </div>
                            <button type="submit" class="btn btn-success">
                                Send
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
