<?php

echo ( (2<<3) - (~4 & 3) ) ^ 1;

// 12
// // ---
// // 2 << 3 = 10000b = 16
// // ~4 inverte os bits de 4: 1111111111111111111111111111111111111111111111111111111111111011
// // fazendo o and: "Bits that are set in both $a and $b are set.", retorna somente o q for igual:
// // no caso 11b = 3
// // Fazendo o ultimo bloco 13 ^ 1: 1101b ^ 0001b = 1100b = 12
// // ^ o XOR ou Exclusive OR will return 0 for all equals bits!!!
