<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ajax request sample</title>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
  <div id="result">Performing HTTP POST request to /home/exp-AJAX/ ...</div>
  <script>
    document.body.onload = function() {
      $result = document.querySelector('#result');
        axios.post(
          '/home/exp_ajax_result/',
          { sample_key: 'sample_value' }
        )
        .then(response => {
            $result.innerHTML = `Result: <pre>${JSON.stringify(response.data, null, 4)}</pre>`;       
         })
           .catch(err => {
             $result.innerHTML = `Error: <pre>${JSON.stringify(err.response.data, null, 4)}</pre>`;
         })
    }
  </script>
</body>
</html>
