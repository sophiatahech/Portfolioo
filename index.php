<html>
<head>
  <title>Movie Quiz</title>
</head>

<body>
  <h2>QUIZ</h2>
  <h1>What Movie Should You Watch Next?</h1>

<form action="form.php" method="POST">
<fieldset id = "movie_quiz">
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
h1 {
    text-align: center;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 60px;
}

form {
    display: grid;
    grid-template-columns: auto;
    background-color: #94b4ee;
    padding: 12px;
    grid-gap: 8px;
    font-size: 15px;
    font-family:monospace;
}

input[type=text] {
    border: 2px solid black;
    border-radius: 3px;
    box-sizing: border-box;
  }

input[type=submit] {
  background-color: #000000;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
  }
.movie_quiz {
    background-color: powderblue;
}

</style>
</html>