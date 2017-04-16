<?php

/**
 * Class Feedback
 * Feedback Given for a particular Assignment by a peer
 * Should belong to an Assignment
 */
class Feedback{
    private $marks_usability_heuristics; // marks for the use of the usability heuristics. Out of 20
    private $marks_clarity;   // marks for the clarity of explanation. Out of 20
    private $marks_illustrations; // marks for the use of illustrations. Out of 20

    // the following will be stored as text
    private $what_worked_great;
    private $what_problems_you_see;
    private $what_you_did_not_understand;
    private $how_can_this_be_improved;

    private $rating_for_feedback;   // store an instance of the RatingForFeedback class


    // Getters and Setters

    public function getRatingForFeedback()
    {
        return $this->rating_for_feedback;
    }

    public function setRatingForFeedback(RatingForFeedback $rating_for_feedback)
    {
        $this->rating_for_feedback = $rating_for_feedback;
    }

    public function getMarksUsabilityHeuristics()
    {
        return $this->marks_usability_heuristics;
    }

    public function setMarksUsabilityHeuristics($marks_usability_heuristics)
    {
        $this->marks_usability_heuristics = $marks_usability_heuristics;
    }

    public function getMarksClarity()
    {
        return $this->marks_clarity;
    }

    public function setMarksClarity($marks_clarity)
    {
        $this->marks_clarity = $marks_clarity;
    }

    public function getMarksIllustrations()
    {
        return $this->marks_illustrations;
    }

    public function setMarksIllustrations($marks_illustrations)
    {
        $this->marks_illustrations = $marks_illustrations;
    }

    public function getWhatWorkedGreat()
    {
        return $this->what_worked_great;
    }

    public function setWhatWorkedGreat($what_worked_great)
    {
        $this->what_worked_great = $what_worked_great;
    }

    public function getWhatProblemsYouSee()
    {
        return $this->what_problems_you_see;
    }

    public function setWhatProblemsYouSee($what_problems_you_see)
    {
        $this->what_problems_you_see = $what_problems_you_see;
    }

    public function getWhatYouDidNotUnderstand()
    {
        return $this->what_you_did_not_understand;
    }

    public function setWhatYouDidNotUnderstand($what_you_did_not_understand)
    {
        $this->what_you_did_not_understand = $what_you_did_not_understand;
    }

    public function getHowCanThisBeImproved()
    {
        return $this->how_can_this_be_improved;
    }

    public function setHowCanThisBeImproved($how_can_this_be_improved)
    {
        $this->how_can_this_be_improved = $how_can_this_be_improved;
    }

    // End of Getters and Setters
}