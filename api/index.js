const express = require("express");
const app = express();
const port = process.env.PORT || 80;

app.get("/", (req, res) =>
  res.json({
    data: [
      { id: 1, name: "orange" },
      { id: 2, name: "apple" },
      { id: 3, name: "banana" }
    ],
  })
);
app.listen(port, () => console.log(`Example app listening on port ${port}!`));
