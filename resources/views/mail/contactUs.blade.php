<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Contact Us</title>
</head>
<body>
    <div class="container">
        <div class="text-center h2">Contact Us </div>
        <table class="table border">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{ $data['name'] }}</th>
                <th scope="row">{{ $data['email'] }}</th>
                <th scope="row">{{ $data['subject'] }}</th>
                <th scope="row">{{ $data['message'] }}</th>
              </tr>
            
            </tbody>
          </table>
    </div>
</body>
</html>