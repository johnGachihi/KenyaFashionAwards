export default interface VotesInCategory {
    category_id : number,
    candidate_ids : number[],
    candidates : string[],
    votes : number[],
    total : number
}