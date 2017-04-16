<?php

/**
 * Class RatingForFeedback
 * The rating to be given back by a student for a particular feedback given by a peer
 */
class RatingForFeedback{
    private $stars; /* Stars: 1 - Nothing to Learn from this feedback
                              2 - OK. But feedback could be more insightful
                              3 - This is just alright
                              4 - This is awesome. I learnt a lot
                              5 - Beyond my expectations. I learnt a lot */
    private $comment;

    public function __construct($stars, $comment)
    {
        $this->stars = $stars;
        $this->comment = $comment;
    }


}
