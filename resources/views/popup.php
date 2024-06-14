<!-- popup.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Popup Example</title>
    <style>
        /* Styles for the popup */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            z-index: 9999;
        }

        .popup h2 {
            margin-top: 0;
        }

        .popup p {
            margin-bottom: 10px;
        }

        .popup .close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #888;
            cursor: pointer;
        }
    </style>
    <script>
        // JavaScript code for the popup functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Get the popup element
            var popup = document.getElementById('popup');

            // Get the close button
            var closeButton = document.getElementById('close-button');

            // Close the popup when the close button is clicked
            closeButton.addEventListener('click', function() {
                popup.style.display = 'none';
            });

            // Show the popup
            popup.style.display = 'block';
        });
    </script>
</head>
<body>
    <div class="popup" id="popup">
        <span class="close" id="close-button">&times;</span>
        <h2>Popup Title</h2>
        <p>This is the content of the popup.</p>
    </div>
</body>
</html>
