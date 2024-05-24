<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Complaint Analysis</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    header {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        text-align: center;
    }
    h1 {
        margin: 0;
    }
    .container {
        margin: 20px;
    }
    form {
        margin-bottom: 20px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    .complaints {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
    }
    .complaint {
        margin-bottom: 10px;
    }
    .category {
        margin-top: 10px;
    }
</style>
</head>
<body>
    <header>
        <h1>Complaint Analysis</h1>
    </header>
    <div class="container">
        <form id="complaintForm">
            <label for="complaint">Enter Complaint:</label>
            <textarea id="complaint" name="complaint" rows="4" required></textarea>
            <label for="category">Category:</label>
            <select id="category" name="category" required>
                <option value="">Select Category</option>
                <option value="Technical">Technical</option>
                <option value="HR">HR</option>
                <option value="Facilities">Facilities</option>
                <option value="Others">Others</option>
            </select>
            <input type="submit" value="Submit Complaint">
        </form>
        <div class="complaints">
            <h2>Complaints</h2>
            <div class="complaint">
                <strong>Complaint:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et turpis vel ante elementum mattis nec sit amet mi.
                <div class="category">Category: Technical</div>
            </div>
            <!-- More complaints will be dynamically added here -->
        </div>
    </div>

    <script>
        document.getElementById("complaintForm").addEventListener("submit", function(event) {
            event.preventDefault();
            var complaintText = document.getElementById("complaint").value;
            var category = document.getElementById("category").value;
            var complaintsContainer = document.querySelector(".complaints");

            var complaintDiv = document.createElement("div");
            complaintDiv.classList.add("complaint");

            var complaintTextDiv = document.createElement("div");
            complaintTextDiv.innerHTML = "<strong>Complaint:</strong> " + complaintText;

            var categoryDiv = document.createElement("div");
            categoryDiv.classList.add("category");
            categoryDiv.textContent = "Category: " + category;

            complaintDiv.appendChild(complaintTextDiv);
            complaintDiv.appendChild(categoryDiv);

            complaintsContainer.appendChild(complaintDiv);
            document.getElementById("complaintForm").reset();
        });
    </script>
</body>
</html>
