<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form action="\signin" method="POST">
        @csrf
      <label>First Name: </label><br />
      <input type="text" name="firstname" /><br /><br />
      <label>Last Name: </label><br />
      <input type="text" name="lastname" /><br /><br />

      <label>Gender Type: </label><br />
      <input type="radio" name="gender" />Male <br />
      <input type="radio" name="gender" />Female <br />
      <input type="radio" name="gender" />Other <br /><br />

      <label>Nationality</label><br /><br />
      <select name="nationality">
        <option value="American">American</option>
        <option value="Brazilian">Brazilian</option>
        <option value="Canada">Canada</option>
        <option value="Malaysian">Malaysian</option>
        <option value="Indonesian">Indonesian</option>
        <option value="Singapore">Singapore</option>
        <option value="Korean">Korean</option>
        <option value="Spanish">Spanish</option>
        <option value="Sweden">Sweden</option>
      </select>
      <br /><br />

      <label>Language Spoken</label> <br />
      <input type="checkbox" name="language" />Bahasa Indonesia <br />
      <input type="checkbox" name="language" />English <br />
      <input type="checkbox" name="language" />Other <br /><br />

      <label>Bio</label> <br />
      <textarea name="message" rows="10" cols="30"></textarea>
      <br />
      <input type="submit" value="Sign Up" />
    </form>
</body>
</html>