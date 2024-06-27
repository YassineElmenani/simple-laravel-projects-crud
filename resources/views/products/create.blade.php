<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2> Add Product </h2>
        <form method="post" action="{{route('product.store')}}">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text"  name="name">
            </div>
            <div class="form-group">
                <label for="qty">Quantity:</label>
                <input type="text"  name="qty">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text"  name="price">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" ></input>
            </div>
            <div class="form-group">
                <button type="submit">Add</button>
            </div>
        </form>
    </div>
</body>
</html>
