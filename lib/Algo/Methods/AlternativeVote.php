<?php
/*
    Ranked Pairs part of the Condorcet PHP Class

    By Julien Boudry - MIT LICENSE (Please read LICENSE.txt)
    https://github.com/julien-boudry/Condorcet
*/
namespace Condorcet\Algo\Methods;

use Condorcet\Algo\Method;
use Condorcet\Algo\MethodInterface;
use Condorcet\Election;
use Condorcet\CondorcetException;
use Condorcet\Algo\Tools\VirtualVote;

// Ranker Pairs is a Condorcet Algorithm | http://en.wikipedia.org/wiki/Ranked_Pairs
class AlternativeVote extends Method implements MethodInterface
{
    // Method Name
    const METHOD_NAME = 'Alternative Vote,AlternativeVote,Instant-runoff voting,transferable vote,ranked choice voting,preferential voting,IRV,AV';

    // Alternative Vote
    protected $candidateScore;

    protected $_Result;


/////////// PUBLIC ///////////


    // Get the Ranked Pairs ranking
    public function getResult ($options = null)
    {
        // Cache
        if ( $this->_Result !== null )
        {
            return $this->_Result;
        }

            //////

        $this->candidateScore = $this->_selfElection->getCandidatesList();
        array_walk($this->candidateScore, function (&$candidateValue, $key) {$candidateValue = 0;});

        $this->makeResult();

        // Return
        return $this->_Result;
    }

    // Get the Ranked Pair ranking
    public function getStats ()
    {
        $this->getResult();

            //////

        return $this->_Stats;
    }



/////////// COMPUTE ///////////


    //:: ALTERNATIVE VOTE ALGORITHM. :://

    protected function makeResult ()
    {
        $round = 0;


    }

}
