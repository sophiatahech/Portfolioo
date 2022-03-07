<html>
<head>
  <title>Movie Quiz</title>
</head>

<body>
  <h2>QUIZ</h2>
  <h1>What Movie Should You Watch Next?</h1>

<form action="form.php" method="POST">
<input type="checkbox" name="1d2">
<fieldset id = "badge_quiz">
  <legend>Quiz</legend>
  <legend>Choose a genre</legend>
  <div>
    <label for="comedy_id">Comedy</label>
    <input id="comedy_id" type="radio" name="genre_id" value="comedy"/>
  </div>
  <div>
    <label for="romance_id">Romance</label>
    <input id="romance_id" type="radio" name="genre_id" value="romance"/>
  </div>
  <div>
    <label for="action_id">Action</label>
    <input id="action_id" type="radio" name="genre_id" value="action"/>
  </div>
  <br>

  <legend>Do you prefer sad or happy endings?</legend>
  <div>
    <label for="sad_id">Sad</label>
    <input id="sad_id" type="radio" name="end_quiz" value="sad"/>
  </div>
  <div>
    <label for="happy_id">Happy</label>
    <input id="happy_id" type="radio" name="end_quiz" value="happy"/>
  </div>
<br>
  <div>
    <input id="submit" type="submit" name="submit" value="Submit"/>
  </div>
  </fieldset>
    </form>
  </body>
  <style>
      h2{
          text-align: center;
      }
      h1{
          text-align: center;
      }
      </style>
</html>