<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Issue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f8fc;
            font-family: 'Arial', sans-serif;
            color: #343a40;
        }

        .navbar {
            background-color: #4CAF50 !important;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
            font-size: 1.6rem;
        }

        .form-container {
            background: linear-gradient(145deg, #ffffff, #e6e9ef);
            border-radius: 12px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        h3 {
            color: #343a40;
            font-weight: 600;
            text-align: center;
            margin-bottom: 25px;
            text-transform: uppercase;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            font-size: 1rem;
            padding: 10px 20px;
            transition: all 0.3s ease-in-out;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
            font-size: 1rem;
            padding: 10px 20px;
            transition: all 0.3s ease-in-out;
            border-radius: 8px;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('issues.index') }}">CRUD Management</a>
        </div>
    </nav>

    <!-- Add Issue Form -->
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6 form-container">
                <h3>Add an Issue</h3>
                <form action="{{ route('issues.store') }}" method="post">
                    @csrf
                    <!-- Select Computer -->
                    <div class="mb-3">
                        <label for="computer_id" class="form-label">Select Computer</label>
                        <select class="form-control" id="computer_id" name="computer_id" required>
                            <option value="">Select a Computer</option>
                            @foreach ($computers as $computer)
                                <option value="{{ $computer->id }}">{{ $computer->computer_name }} ({{ $computer->model }})</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Reported By -->
                    <div class="mb-3">
                        <label for="reported_by" class="form-label">Reported By</label>
                        <input type="text" class="form-control" id="reported_by" name="reported_by" required>
                    </div>

                    <!-- Reported Date -->
                    <div class="mb-3">
                        <label for="reported_date" class="form-label">Reported Date</label>
                        <input type="date" class="form-control" id="reported_date" name="reported_date" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                    </div>

                    <!-- Urgency -->
                    <div class="mb-3">
                        <label for="urgency" class="form-label">Urgency</label>
                        <select class="form-control" id="urgency" name="urgency" required>
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="Open">Open</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Resolved">Resolved</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Create Issue</button>
                    <a href="{{ route('issues.index') }}" class="btn btn-success">Back to List</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
