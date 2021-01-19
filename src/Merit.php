<?php

namespace EnMarche\MajorityJudgment;

class Merit
{
    private $mention;
    private $score;
    private $percent;
    private $isReset = false;

    public function __construct(Mention $mention, int $score, float $percent)
    {
        $this->mention = $mention;
        $this->score = $score;
        $this->percent = $percent;
    }

    public function getMention(): Mention
    {
        return $this->mention;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getPercent(): float
    {
        return $this->percent;
    }

    public function reset(): void
    {
        $this->isReset = true;
    }

    public function isReset(): bool
    {
        return $this->isReset;
    }
}
