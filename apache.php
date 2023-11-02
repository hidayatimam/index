<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Apache2 Server</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: green;
        }
        p {
            color: #555;
        }
        center {
            margin-top: 20px;
        }
        img {
            display: block;
            margin: 20px auto;
        }
        .connected {
            color: green;
        }
        .not-connected {
            color: red;
        }
    </style>
</head>
<body>
    <center>
        <u><h1>Hello users, I'm Apache2 Server</h1></u>
    </center>
    <marquee behavior="scroll" direction="left">
        <h2><p>Your Apache2 Is running</p></h2>
    </marquee>
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUUAAAB8CAMAAADJqFK+AAABnlBMVEX///+qAAAAAACnAADLITakAAD8+PjIIDf2mCLSmprHgYHLhYXCbGzFIDqxIE6pFRXkwsK7IETx4OCqqqrBID62IEnodyatNDS+IEHBcXH58fG6YmK4V1e3XV1OTk7gXyqBJ3mrIFSnIFjp6enaSy7dVSxnZ2fjaCnbrKzlbyfXQi8VFRXyjiOtKCjExMSHh4fU1NQfHx+5ubmTk5M0NDTs1NTQMDO2TU1zc3Pft7daWlpAQEDDAACJJXOenp4pKSn5y6nrm3rIACKvQECCAGeqb5l1AGd0AHJ5GHX97+P84sz2qFP0iADwewD72rz1kgX0pWP1r3j1nTfwkDjus53naAD1y7btgyb4wIvpgkj3smjsi0TmdjvwsI/jgmPiXhLrjl3keFDmk4DdTAfYNQDhf3TwvrXcalnXNhjbVUHmnJbWWGDHPUTQZ3XRfIvbb3C+SVvQi5u+U223PWHZs8K9haSeK2nAbYfBnLnSnqzaxteXTIiPAmGvSnKFS5CXYpmjgK5XAGxLAHdyU5ZlL4WAapyzp8GFeZpcUoFfX3499d/nAAAU4UlEQVR4nO2di3/TRrbHbdkWOE5iR05IrDgmQTQYjB+xI5wHsSEmIQVu2XahXfbulrZQyiuhtDyCs03YF0v/6zvnzIw0kjXyg8Vpev37fLYkeGZ05qsz58zLbCDQkz69pvdWcSBL167fuPE/1z89bDOOtj67efP4+fM3bgwwfoAu3TxOdP78+T8OMPasSzeOM4rn/6AetjFHVdQTGcZLh23NEdWl48dtijc+HzhjL/rsCwfFPwwiYw+69sVNkeL5P3552BYdQX16nUH8YhAYe5b+OYfIKd64dNg2HT3dun0eIV6/fnNAsVd9efvEVwjxzzetyHjpsI06arp2+8SJE8QZb/5JyC+fHbZVR0yf3gGKXxGI1+08/cW1wzbriOny7bNnCcYbn//ZXrx8NZgvdqdLZ1En/vdPBN75r06gbl8erF260bW/UIp3v7xzwtbtvx62XUdK+td3z5w5c/bs7b9eFiCeuDNYunQh9RZAPHPm7je37pwVKH4zGNBd6MHJk0jxzC3IMWctkIMB3YW0b++dRI6Xb8Gwtjj+ZZChO5f6HUAk+vbLb2h4ZCAvH7ZlR0kP7n3yCVK8xcIj43h7MOXuXPonVCe/1U7y+Igc7xy2ZUdJX9+jFO+bX989KXC8N3DFzvXg/unTSPE77f5JJsQ4cMXOpT88jfrkfoCHR8rxnnbYph0hfU8hnr7/4NZ9jI5MdwdL6M6VOHfuHEB8+IP+kGcZqoErdizth4fnQKcfmo85RQR579bAFTvW43NUD783H9HwSHXv68HFu45lPl2/QDGa37H4yDg+6Lcpahe+r+r6b2ik6LH1MFJ8+DjxiMZHyvHed/JK2lB6ZnpZ9qm6nJ5xaZr8bzi27Ofcy9Mz6VRHgViLpmZm0kQzM6ms6VEgCp94fWApQQxKR+3XoKXcFjsllvWSuR4Oh4Hio8RjjI8MI0k18krRYCgUSck+VaORkIeCkXh+SN5oCipFfW3FxrPVfDxotRnPN1o7OEyayif8WkmQEpEhu6I56WWxrYiP4UT6E6AYBlc0H7EAiRAf+VTTh0PBYHBSZiehGJQoFIlJXmpiEj4ebhOK1WgoEmpt01UKzJNaR58WJ/UEitqkzGKqSMzXsOzFY0DxwrmnxBUvXLA4/qD7BKnlPFo/JO0qUPTyRrBn0tueGH4az/oZqyaC9P04WiRtRkyHsb1S7NUXdfREcMaYCQgZxkeP1URMHqNi2JdQQxJ6kGKoOi0KAlkD3SgU9DLITFPGftbqQ9QPQ/FqmraanoyHPHylR4r5mWmZZnzjYuwio/jUjF08x/XocfbJxe+llcxGCGAEZVEMKUZcvVBV3Yw2EOOkx/uJsiYn5UlBq1IXn0xlNdYnNRFNTVL8KQFjbxRDqR6TvsYhrqe09Qtc4ZH1i+thaQoO4IBNhUgU83ZXT4ooEwOqh7nacIR4L9CQ5hetinXzMWfDamII/TEkeHGfKW7zAb2uWT9y55Q2Cd0JVXVCKu5tqZxiQE9FPKMf9CoCjENVSSDRcMiHqokWu/TlPHwUtwddfykmLIg7lldyufOeUAsYmQHCUpK5fCgG9DSwSGutNUL5gAb1vMcAnRZEpj0Zm+CNwtwGKcrHUuC/S/EJR3ZRfeZyxXVplAd3CpFECzCDnp3yo0jjeMjljBq4YjagwpuZ9nqyGqUQJVbpkHYiVf4pUMz3i+KyhWxHd7ni+jNpLRjKpMcBnThAxHNi4ksRpzTuiJplb2QZKnq9GTOCkySpURp+zh/ZT4r6s/VjzBUD7qh4Ud5gjPVYzcIo9HYcP4rwFkLOiKqTwBaBsIY+6RFLdIx8QZ/OkMWIPUvqJ8XsMRA4XswdFdflKzF0RVyAmCEJK3+KEFBd0Q+CQwhcUIVXFGl9MzgriPitjPV02v64jxTBFSnHdd3liuvb8mow+EJoMJkEkwDpUaQNRfzUMYsl6Zc5Er6Z1leIEGVrR9Yd4dM+UqSuSLS+Y7o8cdtnAQGDj81wE5Io1oYiBj9xjQJBLUQ7DfPGYMirRjDf+cZ7/ygSVxxhQ9qMORiGY5rcYAjzPMNq0zDzbi3ThiKOX9dSIzTDHpn1ChONkNt7/dU/ionwCBF1xSdhGiBRz7LZHXkESsPEmH8M049I66M7oSj4ohoRFpMmTOnTzgqYoP13upzqG0V9Z31khHJMRMPHeKIJH9t+th1+LF+3wNOtJJpohLyiWCcjWpivw4zb3tiA/BJ3jgWcG6W6OL7oG0UtTCGOrD8zn4V5iCQgnx67+EQ+oIec+4pDxHEaLYW6zC7kVQibbLjr5twArvrsfHiqXxTV5+HxceqL2awNETP2MfnY0WG8CV3MEmPiLea2oZh2znSW444uq9O4Sheba8BeTxcDum8U9fVx0MhI+Jm5HR4RKY742BuNO7cSdAiTM+5SHcy6hSg3Q5qYdj9D9Dxz0mPl7at+UYwemxqnHJ8neHykI/qJD0S9xU9iMMLducifYtS5AoSTAgc0DVxPXDBn8x0cJTiEFLOqj5a9KA7rktKy54yPT00Bx5GnZoylGeAYfrptanJ7IWaFHAs0fLp7ydbBboSNDd+D45EQe0VPAucMSY/KvAQU4+mYj6YjHnvdk0PehaOScZCIj01NIccdbWpkfIRzHBnObsvXLeoQ5E8nZJjrpV3O6LszBj2050q4behCpLn8BCnKzng8RfeCIz6i+7rucxdJYdn++49TYxTjiJZdHx+3MD4dWQ/Lz48Sk64QFmDrF1cVv13aWDzoGMGQn9zrHwArZJMeKbZVx2eAkvMlfWQMNTW+rU+w+MgUfiIf0DjJdreYb93n8jkxSMVxk9Z6hp5qnWTjhFIY8736oq88KUrcV+KLz6coxbG4mYjTAMlBHtuR2oaDL+/+Ww9iHhRVXde1xFCVHpfa0OlJgbvNiCMp90YxXh32UdU7LnpLchr64wQROmPgx/EpFiEZSPniL+G9n+/eW+Dn0ZNVhxqNRp6dSJuOkqHWbcMhx1vI9pRdSI7WpZLmaO/S3jgmJijGeFaLswDJOB4bk5qmY99aW4RdmLiDPbsb4XGkjxFceLNm3nMJiVNKa26T6G2m87Hni88nGMbxwDaObZtj+IW0lhnxPufUW7YLfW+YTIsl8aTAYztjOCK4LPaw6nt5yaV+UNS3GcWpN2qQBUiOcURaiwa7aLZFMOELOWZ8rhsmFsB4fnLaeVIAS+iqR5upkLgrW+1yS6cvFBM/j44ixXH9+djEmMgx/EZaS8ezc68UhuNU7CS9YZJO2RrC+WzUfU0OjxG9EiO9SMKH/vRvcTfizShqYmxHn+BphoEckbeTlY5S7LE4W2mzG2Er7Tuvs8IHznwk9zA81QeK+s4ExTiWWB6b4CES5XNoBScFsvkUOqnQSUrRtxfUdJkr0jZDcd5eqMsh3QeK5k/MF7etAMk4Tv0oT4R4UlDNJjy0DCNOvBPaKcUUbtcmlpdb28w2xJMDZ5hsrz5QfDE3OoeumDV/HGURkmL0ueBENwUli0M8XIrYv3dKEa/sSHIvhlZ+wKj7lfRQHyi+GZ0Djf5sPmdOyVO2z9EfzuBkq3LNhbhDilhKdhCQgAhihQn0TP9LweJRavcUzS4p6jtzlOJzbXvUgXHMJ/LEfMcUZh57bdghRTgakLk3neMH+QGj2fZUn0zgbW4fn6L5C4U49+LF3OiowHHKJ7XojaDfbWHY7BFODjqjiIuwGWnmxTfDp6G4J+d1acIS3KqI5Bnnj0/xBXXFudfacxjaNsdtn6kEbgjILmxBJyGLWpOdzijiFTz5m9NmxGsSGt6t87zLTJUVrzv1g+KpU6cIvjfmz2xoU/3kN16gR0EfX8WDOytsdkQR7fY7k4oC5RneMXxCRHZFlEEcZqU/OkX95SnUTybLMhyj33QMzkakd+GxVVxe8JODjijiIfO0j914e9xiQS8wSg6xVIRo3xfv/hZolxS1jVdI8bX2es6WP0R2rO5XAoc872InFDGv+38vA88WrJ7Sy7Shqsf3tzS8DBhyZpfubiR3S3GNUnxhzuHAphD90jO99dFm7QAHd1bC7YQibhpWfc3G9GOPALgVBKzcX03Ts/TGdz77Afe6u6RoXkGMP6tvID5SjqOn/Ce0OJjk91hRKeEWSAcU9ZQYAiTKO/OPPs2+ZiNy1LLpuBtizxT9zaFGGPDfJqX4Wj/FNTf6E9yMlVdEJ5BO7LgZeCpFyXVAMYHF2+y84vpFmAup7NtKwXxjGNaiy9lYg31tKOK4nNsbxWB+OCU7YUhZAXl3lxiye2UNMGqJOQ5x7g1prOlDMeFa4HkLcyjdrO2AIpZwn1q1yHFZm5pi7VY6N9AdVw16peh34GXvtmzsqQGk+OpU4DWH+BpcFADLpOPGc5vBx+7T0Wlve4rmpLi+kwrPKBxnBepQ3kJn8Yw3XMR6pei3TWcZq83u6S8JxbW/vWAD+pfXpNuqtrHm90D4xq3fsoEJi6Ez4jd7fSkuQ2G/y+5UOrbpDNraEJyC2Yo3hlt49fDN3ryXA3r6YuDl5t7GGkjdPfXq1S+v32gBXWsSsIb8eWq2Ua2mPW7MuhUl5aq4Y4BV3P4hSo+m0+lqm0gLSs2Qcu7XoWWHpuFIsdGopqeHvK5/RKvp9LD/qjtNLBS/ZT6c9pcw39c3Z9dm19auvAy8+tvaq413zebuy721K2vyIyuoZJqm1skcwLQKavCj71dhNc3n1rOroEdDugmbkKbsTpFukmq+JqtorPC71k5Ccy83Z4k2tSb8ubV5ZfMK0dpuj98i/P8qHentBTa2ZlFkcF/ZezGA2KX2CMbNXXWWa21zQ/st/VsgR0O7hOIWHdA4tteagWbzsI06ctI2ZzffqgcM4tau0dw4+Pj/DFahXC599Ie0UVcDTl642TRU1bg6u9nUrQG9tbm51waiohTpD8aSsmIESvUM12qttGT9klkMBEo5BbQ4XxZnTmoR/1ZZQtPYLyBSqEB/ymUqQLlECvFahZwyrwYWrMIrYuliSehmaRX/tj6fNMTHLbLf0fQKWrbEXmUpQ4tAx8q2PRVqbmmefkgeYRTt/tXZI1/s729sbG3tabs2xa2DdidrFkVi3pLBe0IfxDpARSnmcmDwQtlugJi8SiBTbN4UudV1JcN9tqYoBfgLB0VoX3wlFhP6VKXMKLJCOWqFmiQvo74KbVUM6g8L9foixeamaKCB+PbKqrEi9M/aotudvTp7lQxolqG3rs6+bLsmcVEsLRWLxYySI38slY0K+WNeWZgnf0e8qLSgLNVqteLSopKzRnAZfMAwCpVVtJIYWaQijaH3kRqVpQwiIGVrDM2qkjEQKytdoxSXapVapbhiGUUpzmMbhAt5qlpRVivkV7QCoKnkhawuJQvlSoa+q4BKIky5zClCV1AFgEiaXi1WkpUi9MGoQTeV3AqYyyk2m3tXZ2ebzf2t2atEW3tvO0gsLorMUeqCLyirBfbTgkJ/StaVGi9QVBZorQL7NSc0XsKOw4erMID1BWXe4OyTAaBYFEoXcjnaiFFXViwDCMUkfeqiMo8UWRu1HDonYb9Cq8FYrQkdoxQXxZBdtMZ9IUNHeMBQFpJ2AW13f/bgYP9A2z3Y2zt4+3a32VFa8aJYESkWlEWbIh1DEEJ5AfIqC04zhd9KCuNOGl80oGFa2JhX6tAZCUXSqDX0bYrkbxWRIvmggk2t8rJGhoYVfCKnWBfMIy9zlRfgsVekqDZ3m02ykNl4qx+8JX8aneYsHnW7oUiKWsYkFSVjx/lWX7Qo1ukIxzFnkKfCnzKKRU+KRS+KJdH/kjle1qYo+mKNjw1BDooGRkB9lkwQ97uZ2xAXL6DKK934YsYCV4esulIsWT1NoiDQ2RRJPIL8QRwHI2qFZgpSd4WWxvdgU1zA0uypnKLq8sUCIisoC7azGTjoaWlOcaFCn1CgmanFu5wjGtXcJzCbB50BRBEGC1S5jikWmEtRc+nMob6KvxUxoUJOhUo8LpaWaByEmkl8KCVR56Ux9HKK5CVZMASKBcIcKWIiUMur2HjNHtBEZMRys6wczeyZp2+/E4r7G/Dftz47YW4Jub4DihXitEnAJg4MPZlhcyFxpsMoilMZREJGdo2HEWums0gpWqVX7R6QKkUYKksKz9GWoPdJK/lRipkWitwApLjYAUX17zQrd7HoI25loIi/tKfIJM4XqcoZmqZa4mIOnFxZKFrpn6BQeNir86BMn5RjpcXpojWHJo1AAASKZOAA+TI1T7GNKS1a83qvuNjhiH633/XOQ3c5enUlk1mxgiCtx4ypoxu05OhKuUxi/jz3LTIs5+01jDu7KMVyubZqJ1psI6MsCk8lFDPJcrnI3dkAN+BlizwOS3J0TUxFTK0U99+6y7RVdxSTxGmdL8pgSNVFb4olajxvGlJExrLbM0cT6KtOX6wJT+XZZYVFWvBNTqGwqCzCGo8lNgBWplMquy0eiwy+jG2hqP+9+52HXuaLgkhuWUwWSDwo5tBqQtHgsnI0oOPT9CSMWE6pTh7JpCJFbN/yM95zsZecIln90LFKJokLOCEwkqv4uFKmWCgVVqjZhGLZtgeenkuWVNUoFHmCbKH47l/dMvxwijWIUPPzGZYRCIF5qpWyPdMhPeUDC9eu3APrUBW1VLApkvlKToh13hRhokqn/uBgK5VKZT7H8w0JAXUWXMkKMMMeUeTmkgUfLCeXJBT3fQ5MZRL3dOYtiopIsc66VFJaKZLxs8S2G9AzhN2IGoZ+Co+kykXWOJTggUyYH5SFRFFSrDeHTifGMqPI0j2kChpeuQVsJch2eIqctZCkYY29yBO8NaKdsVL7RxczHK6ktTVYSvJFUaFYsSkaxQoPJcmk1wMMo0DmtKxuKWnJEGqohWTNCkhli5BdOFnC0qxMGSfJvHzSkcxKybLKzakZzILk0vxSrcRjLzGobLTYwzzAKFRIYbtNu39Uuz0MaG+p0l9+q/L5dwvaFXbV/GcPA3ogl5r/Gvz/Eny4ephyD9Sif787bAt+B2r+89DP4X4HevfvHuY5Azml/mcwoD9cpfeF9oUGaqPy+8GA/mCplZaNs4G6Vul960bBQN2q8OtgQH+w1Hf/OWwTfgcy3g/mOR+u0vvBwuXD9e7Xw7bgdyD114Er/hc02BP7cP0f1GVdkvkXY+YAAAAASUVORK5CYII=">

    <?php
    $info_php = phpversion();
    echo "<p><strong>Versi PHP:</strong> $info_php</p";
    
    // Informasi versi PostgreSQL
    $dbconn = pg_connect("host=127.0.0.1 dbname=coba user=postgres password=root");
    if ($dbconn) {
        $version = pg_version($dbconn);
        $postgresql_version = $version['server'];
        echo "<p class='connected'><strong>Versi PostgreSQL:</strong> $postgresql_version</p>";
        pg_close($dbconn);
    } else {
        echo "<p class='not-connected'><strong>Tidak dapat terhubung ke PostgreSQL</strong></p>";   
    }

    // Informasi OS
    $os_info = php_uname();
    echo "<p><strong>Informasi OS:</strong> $os_info</p>";
    ?>
</body>
</html>
