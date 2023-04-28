<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Chat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="jumbotron text-center mt-8">
        <h1>Simple Chat App</h1>
    </div>
    <hr>
    <div class="comntainer m-8">
        <div class="row m-8 p-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3" id="messageOutput"></div>
                        <hr>
                        <form id="chatForm">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="message" placeholder="Message">
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
</body>
</html>