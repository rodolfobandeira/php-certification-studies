<?php

//  string chunk_split ( string $body [, int $chunklen = 76 [, string $end = "\r\n" ]] )

$text = <<<EOF
t wasn’t a cakewalk, however. Blatter could not defeat his opponent, Prince Ali bin al-Hussein of Jordan, on the first ballot, which required a two-thirds majority to win. A second ballot would have needed only a simple majority for victory. With Blatter ahead 133-73 after the first round of voting, Ali withdrew in the face of a near-certain loss.

Blatter’s challenger drew support from the United States, Canada and a host of European countries, who asserted that the current investigations by U.S. and Swiss law-enforcement authorities made change at FIFA imperative.

But Blatter, 79, benefited from the backing of many soccer associations in Africa and Asia, which are eager both to promote the sport and to benefit from FIFA’s largesse.

“For the next four years I will be in command of this boat called FIFA,” Blatter said, sounding relieved after winning re-election. “I’m not perfect, nobody’s perfect – but we will do a good job together, I’m sure.”

Prince Ali had framed Friday’s vote as a chance to salvage FIFA’s reputation. “The eyes of the world are upon us,” he said, noting that FIFA had been described in recent days as “avaricious” and “morally bankrupt.”

Before withdrawing from the race, he stood before the assembled delegates and thanked all of those “who were brave enough to support me.”

“I congratulate you if you voted for Prince Ali, he was a good candidate,” Blatter said. “But I am the president now, the president of everybody.”

While Blatter’s grip on FIFA, which he has run since 1998, remains secure, he is heading an organization in crisis. There was little sign on Friday that Blatter had a concrete plan for tackling the corruption that allegedly flourished on his watch or that he felt personally responsible for those developments.

Earlier in the day, Blatter presented the misconduct as a matter of collective responsibility and suggested soccer was too large to be policed. “We cannot permanently supervise everybody in football,” he said. “You can’t ask everybody to behave ethically just like that.”

Later, he adjusted his tone somewhat. “I am being held accountable for the current storm. Okay, so be it – I will shoulder that responsibility,” he said.

Blatter also suggested that the 2010 votes, which awarded the World Cups for 2018 and 2022 to Russia and Qatar, respectively, was at the root of FIFA’s current travails. “If two other countries had emerged from the envelope, I think we would not have these problems today,” he said. “We are not prophets, we cannot say what would have happened.”
EOF;

$string = chunk_split(base64_encode($text));
print_r($string);





