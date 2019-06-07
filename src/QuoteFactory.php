<?php
namespace AlvaroOmatech\OmaQuotes;

class QuoteFactory
{
    private $quotes = [];
    public function __construct(array $quote = [])
    {
        if (!empty($quote)) {
            $this->quotes[] = $quote;
        } else {
            $this->quotes = include __DIR__ . '/../data/quotes.php';
        }
    }
    /**
     * @return array
     */
    public function getRandomQuote(): array
    {
        $randomQuote = array_rand($this->quotes, 1);
        return $this->quotes[$randomQuote];
    }
}