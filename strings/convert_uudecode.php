<?php

// uudecode is a way to represent any char binary or unvisible to visible chars.
// They use it to transmit data in network systems.

// Maybe it' similar to base64? Maybe..

/* Can you imagine what this will print? :) */
echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`");

// Output:
// I love PHP!

