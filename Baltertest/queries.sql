SELECT 
	polls.*, 
	COUNT(votes.poll_id) AS vote_count        
FROM polls
	LEFT JOIN votes
		ON (polls.id = votes.poll_id)
GROUP BY
    polls.id;