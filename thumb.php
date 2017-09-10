// Location where video thumbnail to store
$thumbnail_path = 'your_site_domain/media/images/thumbnail/';
$second             = 1;
$thumbSize       = '150x150';
 
// Video file name without extension(.mp4 etc)
$videoname  = 'sample_video';
 
// FFmpeg Command to generate video thumbnail
 
$cmd = "{$ffmpeg_installation_path} -i {$video_file_path} -deinterlace -an -ss {$second} -t 00:00:01  -s {$thumbSize} -r 1 -y -vcodec mjpeg -f mjpeg {$path_to_store_generated_thumbnail} 2>&1";
 
exec($cmd, $output, $retval);
 
if ($retval)
{
    echo 'error in generating video thumbnail';
}
else
{
    echo 'Thumbnail generated successfully';
    echo $thumb_path = $thumbnail_path . $videoname . '.jpg';
}